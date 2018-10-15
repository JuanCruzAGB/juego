# Fallout Simulator / NOMBRE EN PROGRESO

## Idea:
Juego de texto, en el que el Usuario pueda crear Personajes, y tengan que sobrevivir a Eventos random a lo largo de la partida, estos los van a ir matando uno a uno hasta que solo quede un superviviente.

### Partidas
Creadas al momento en el que el Usuario da en [JUGAR], va a guardar todos los elementos necesarios para poder jugar y que sean de acceso rápido.

**Rasgos:**
- [ ] **Personajes vivos:** Todos los Personajes que están vivos actualmente.
- [ ] **Personajes muertos:** Todos los Personajes que están muertos actualmente.
- [ ] **Eventos:** Todos los Eventos llevados actualmente.
- [ ] **Días:** La ronda actual de la partida.

### Personajes
Establecidos por el Usuario y almacenados en el localstorage para un acceso más rápido en futuras partidas.

**Rasgos:**
- [ ] **Id:** El identificador de acceso rápido del Personaje por el programa.
- [ ] **Nombre:** El identificador para lectura del Personaje por el Usuario.
- [ ] **Evento previo:** El Evento previo a la ronda actual que hizo el Personaje.

### Eventos
Establecidos por defecto, estos tendrán efecto en los Personajes participantes. Pueden tener ciertos requisitos para que se lleven a cabo.

**Rasgos:**
- [ ] **Id:** El identificador de acceso rápido del Evento por el programa.
- [ ] **Texto:** La descripción de lo que provoca el Evento. El texto tendrá dentro de su contenido ` {nombre} ` que representara el Personaje participe dentro del Evento en caso de ser necesario.
- [ ] **Cantidad de Usuario Afectados:** Número que determina cuantos Personajes participan en el Evento.
- [ ] **Efecto producido:** El efecto provocado por el Evento en los Personajes participantes.
- [ ] **Evento padre:** En caso de existir, el Evento padre necesario para que se de el Evento.
- [ ] **Día necesario:** La cantidad de días necesarios para que se dé el Evento.
- [ ] **Jugadores necesarios:** La cantidad de jugadores necesarios para que se dé el Evento.
- [ ] **Repetición:** Un booleano que determina si el Evento puede o no repetirse a lo largo de la partida.

**Algunos ejemplos son:**

* ` {nombre} `: Fue a pescar con ` {nombre} ` al lago.
  * ` {nombre} `: Como se cansó de escuchar las anécdotas estúpidas de pescador de ` {nombre} ` le clavo la caña en el ojo.
* ` {nombre} `: Encontró una pequeña cabaña en el bosque y decidió pasar la noche en ella.
  * ` {nombre} `: Dentro encontró un bunker secreto debajo de la alfombra. Allí había armas, comida y bebida para un año.
    * ` {nombre} `: Jugando a ser militar, sin querer activo una granada y no le dio tiempo a salir, murió.
* ` {nombre} `: Se acordó de que no había comprado la cartulina.
* ` {nombre} `: Convenció a ` {nombre} ` de jugar al póker. Ambos apostaron que el que perdía se tiraba al lago desnudo.
  * ` {nombre} `: Perdió, se lanzó al lago, nunca aprendió a nadar, se ahogó.
* ` {nombre} `: Bailo delante de la fogata feliz.
* ` {nombre} `: Se quedó sentado todo el día.
* ` {nombre} `: Pensó en cómo sería la vida si su crush le hubiera prestado atención.
* ` {nombre} `: Confundió un cactus con ` {nombre} ` y lo abrazo, auch.
* ` {nombre} `: Junto a ` {nombre} ` y ` {nombre} `, decidió salir a caminar bajo las estrellas.
* ` {nombre} `: Junto a ` {nombre} `, ` {nombre} ` y ` {nombre} `, se sentaron a disfrutar el paisaje.
  * ` {nombre} `: Con ` {nombre} `, ` {nombre} ` y ` {nombre} ` aburridos se pusieron a encontrarle formas a las nubes.
    * ` {nombre} `, ` {nombre} `, ` {nombre} ` y ` {nombre} ` confundidos de si la nube que vieron era una linda ovejita o una hormiga rabiosa, empezaron a pelear.
* ` {nombre} `: Hizo equipo con ` {nombre} ` y acabaron con la vida de ` {nombre} ` y ` {nombre} `.
* ` {nombre} `: No hizo nada hoy el vago.
* ` {nombre} `: Fue a comprar al chino para desayunar con ` {nombre} ` y al no tener monedas para darle al chino por el cambio, el chino se enoja y saca una motosierra debajo de la caja y le corta la cabeza mientras se caga de risa.