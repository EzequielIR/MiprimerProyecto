import sys
from pyswip import Prolog

#inicializamos la variable que contendra el resultado en None
resultado=None

#creacion del objeto de tipo Prolog()
prolog=Prolog()

#usamos el metodo consult(archivo) para ejecutar lo que hay en ese archivo
prolog.consult("2.heroes.pl")

X = input("Super heroe: ")

for valor in prolog.query("enemigos(" + X + ", Y)"):
    print(X," enemigos ",valor["X"])