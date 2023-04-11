#IMPORTAR RECURSOS NECESARIOS.
import cv2
import mediapipe as mp

#INICIAR SISTEMA DE DETECCIÓN.
mp_drawing = mp.solutions.drawing_utils
mp_hands = mp.solutions.hands

#IMAGEN FIJA
IMAGE_FILES = ['hand.jpg']
with mp_hands.Hands(
    static_image_mode=True,
    max_num_hands=2,
    min_detection_confidence=0.5) as hands:
  for idx, file in enumerate(IMAGE_FILES):
    #LECTURA IMÁGEN
    image = cv2.flip(cv2.imread(file), 1)
    #CONVERTIR A RGB
    results = hands.process(cv2.cvtColor(image, cv2.COLOR_BGR2RGB))
    #PUNTOS
    print('Handedness:', results.multi_handedness)
    if not results.multi_hand_landmarks:
      continue
    #OBTENER ALTO Y ANCHO DE LA IMAGEN.
    image_height, image_width, _ = image.shape
    annotated_image = image.copy()
    for hand_landmarks in results.multi_hand_landmarks:
      print(
          f'Index finger tip coordinates: (',
          f'{hand_landmarks.landmark[mp_hands.HandLandmark.INDEX_FINGER_TIP].x * image_width}, '
          f'{hand_landmarks.landmark[mp_hands.HandLandmark.INDEX_FINGER_TIP].y * image_height})'
      )
      #CONECTAR PUNTOS DE DTECCIÓN.
      mp_drawing.draw_landmarks(
          annotated_image, hand_landmarks, mp_hands.HAND_CONNECTIONS)
    #GUARDAR RESULTADO.
    cv2.imwrite('annotated_imageh' + str(idx) + '.png', cv2.flip(annotated_image, 1))
