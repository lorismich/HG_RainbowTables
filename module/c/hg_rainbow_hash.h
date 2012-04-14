/* HG_rainbow_hash.h  */


#ifndef _HG_rainbow_hash__H
#define _HG_rainbow_hash__H

#define md5_len 32

/** crea dinamicamente la stringa testo_cifrato di dimensione md5_len + 1 e la inizializza con l'md5 della stringa testo passata come parametro concatenata al terminatore di stringa.
    i caratteri devono essere stampabili a schermo con una printf: il carattere '0' deve essere rappresentato come tale ovvero con codice ascii 48 e non codice ascii 0

    \param ps puntatore al puntatore alla scheda (*ps viene settato a NULL dalla funzione)
    \return testo_cifrato 
 */
char *HG_rainbow_md5(char *testo);

#endif
