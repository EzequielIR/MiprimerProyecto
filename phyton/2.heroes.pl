%09 04 19.pl

heroe(spiderman, marvel).
heroe(superman, dc).
heroe(hulk, marvel).
heroe(atman, marvel).
heroe(flash, dc).
heroe(batman, dc).
heroe(ironman, marvel).
heroe(daredevil, marvel).
heroe(shazan, dc).
heroe(nightwing, dc).
villano(duendeVerde, marvel).
villano(lex_luthor, dc).
villano(abominacion, marvel).
villano(modoc, marvel).
villano(revers_flash, dc).
villano(joker, dc).
villano(justin_hamer, marvel).
villano(doctor_doom, marvel).
villano(black_adam, dc).
villano(deathwing, dc).
enemigos(hulk, abominacion).
enemigos(spiderman,duendeVerde).
enemigos(X, Y):- heroe(X, Z),
                 villano(Y, Z),
                 heroe(Y, Z),
                 villano(X, Z).
