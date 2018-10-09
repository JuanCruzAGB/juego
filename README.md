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

### Días
Establecidos por defecto, estos servirán como el contador de rondas que lleva la partida.

**Rasgos:**
- [ ] **Id:** El identificador de acceso rápido del Día por el programa.
- [ ] **Numero:** El identificador para lectura del Día por el Usuario.