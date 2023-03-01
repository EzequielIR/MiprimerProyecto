import sys
from pyswip import Prolog

#inicializamos la variable que contendra el resultado en None
resultado=None

#creacion del objeto de tipo Prolog()
prolog=Prolog()

#usamos el metodo consult(archivo) para ejecutar lo que hay en ese archivo
prolog.consult("basededatosPlantas.pl")

#usamos el metodo query(instruccion) para ejecutar una instruccion sobre la base de datos
print("¿que quieres hacer? \n")

#menu 
eleccion_menu=int(input("1-plantas toxicas en mi pais \n"+
           "2-plantas medicinales en mi pais \n"+
           "3-buscar plantas que puedan curar o tratar mi enfermedad \n"+
           "4-buscar si hay plantas que puedan curar o tratar mi enfermedad en mi pais \n"+
           "5-saber si una planta es medicinal y toxica \n"+
           "6-salir\n"))

#ciclo encargado de la interaccion con el usuario
while eleccion_menu !=6:
      if eleccion_menu==1:
         pais=input("¿cual es tu pais?\n")
         resultado=list(prolog.query(f"toxica_pais(X,{pais})"))

      elif eleccion_menu==2:
          pais=input("¿cual es tu pais?\n")
          resultado=list(prolog.query(f"medicinal_pais(X,{pais})"))

      elif eleccion_menu==3:
          enfermedad=input("¿cual es tu enfermedad?\n")
          resultado=list(prolog.query(f"planta_beneficios(X,\"{enfermedad}\")"))

      elif eleccion_menu==4:
          pais=input("¿cual es tu pais?\n")
          enfermedad=input("\n¿cual es tu enfermedad?\n")
          resultado=bool(list(prolog.query(f"enfermedad_pais(\"{enfermedad}\",{pais})")))
          if resultado: 
             print("existe una planta")
          else: 
             print("no existe tal planta")

      elif eleccion_menu==5:
          planta=input("¿cual planta?\n")
          resultado=bool(list(prolog.query(f"medicinal_toxica({planta})")))
          if resultado: 
             print("es medicinal y toxica")
          else: 
             print("no es medicinal y toxica")

      if eleccion_menu<4:
        for i in range(len(resultado)):
            print(f"{i}-"+resultado[i]['X'])

      eleccion_menu=int(input("1-plantas toxicas en mi pais \n"+
           "2-plantas medicinales en mi pais \n"+
           "3-buscar plantas que puedan curar o tratar mi enfermedad \n"+
           "4-buscar si hay plantas que puedan curar o tratar mi enfermedad en mi pais \n"+
           "5-saber si una planta es medicinal y toxica \n"+
           "6-salir\n"))

