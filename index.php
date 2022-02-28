
*****************************
classe SALA 
-
id
n_posti
listaSpettacoli [ SPETTACOLO ]

*****************************
estesa  NO EFFETTO



*****************************
estesa EFFETTO
-
effetto [ tipo effetto , ... , ... ]



*****************************
classe SPETTACOLO

- sala
- orario 
- film

*****************************
classe FILM extendS SPETTACOLI

- titolo
- regista
- altre info legate al film 


INDEX

spettacolo = new SPETTACOLO( sala , '20.00' , film )

