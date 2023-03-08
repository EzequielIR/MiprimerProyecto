%hechos
%Hombres
hombre(bart).
hombre(homero).
hombre(abraham).
hombre(herb).
hombre(clancy).
%Mujeres
mujer(marge).
mujer(lisa).
mujer(maggie).
mujer(selma).
mujer(patty).
mujer(mona).
mujer(jackeline).
mujer(ling).
padre(bart,homero).
padre(lisa,homero).
padre(maggie,homero).
padre(homero,abraham).
padre(herb,abraham).
padre(marge,clancy).
padre(patty,clancy).
padre(selma,clancy).
madre(bart,marge).
madre(lisa,marge).
madre(maggie,marge).
madre(homero,mona).
madre(herb,mona).
madre(marge,jackeline).
madre(patty,jackeline).
madre(selma,jackeline).
madre(ling,selma).

%reglas
%pareja de
pareja(X,Y):-
    madre(Hijo,X),padre(Hijo,Y);
    padre(Hijo,X),madre(Hijo,Y).

%sobrino de
sobrino(X,Y):-
    padre(Y,Padre),padre(Padre,Abuelo),padre(X,Abuelo);
    padre(Y,Mama),madre(Mama,Abuela),madre(X,Abuela);
    madre(Y,Padre),padre(Padre,Abuelo),madre(X,Abuelo);
    madre(Y,Mama),madre(Mama,Abuela),madre(X,Abuela).
%primo de
primo(X,Y):-
    hombre(X),padre(X,Padre),padre(Padre,Abl),padre(Hijo,Abl),
    padre(Hijo,Y);
    hombre(X),madre(X,Mama),madre(Mama,Abl),madre(Hija,Abl),
    madre(Y,Hija).
%tia de
tia(X,Y):-
    padre(X,Padre),padre(Padre,Abuelo),padre(Y,Abuelo);
    padre(X,Mama),madre(Mama,Abuela),madre(Y,Abuela);
    madre(X,Padre),padre(Padre,Abuelo),madre(Y,Abuelo);
    madre(X,Mama),madre(Mama,Abuela),madre(Y,Abuela).
%hermana de
hermana(X,Y):-
    mujer(X),padre(X,Padre),padre(Y,Padre);
    mujer(X),madre(X,Madre),madre(Y,Madre).
%hermano de
hermano(X,Y):-
    hombre(X),padre(X,Padre),padre(Y,Padre);
    hombre(X),madre(X,Madre),madre(Y,Madre).
%nieto de
nieto(Ab,Ni):-
    hombre(Ni),padre(X,Ab),padre(Ni,X);
    hombre(Ni),padre(X,Ab),madre(Ni,X);
    hombre(Ni),madre(X,Ab),madre(Ni,X);
    hombre(Ni),madre(X,Ab),padre(Ni,X).
%nieta de
nieta(Ab,Ni):-
    mujer(Ni),padre(X,Ab),padre(Ni,X);
    mujer(Ni),padre(X,Ab),madre(Ni,X);
    mujer(Ni),madre(X,Ab),padre(Ni,X);
    mujer(Ni),madre(X,Ab),madre(Ni,X).

%Abuelo de
abuelo(X,Y):-
    hombre(Y),padre(X,P),padre(P,Y);
    hombre(Y),madre(X,M),padre(M,Y).

%Abuela de
abuela(X,Y):-
    mujer(Y),madre(X,M),madre(M,Y);
    mujer(Y),padre(X,M),madre(M,Y).





















