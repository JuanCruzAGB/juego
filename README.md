# Fallout Simulator / NOMBRE EN PROGRESO

## Idea:
Juego de texto, en el que el Usuario pueda crear Personajes, y tengan que sobrevivir a Eventos random a lo largo de la partida, estos los van a ir matando uno a uno hasta que solo quede un superviviente.

### Personajes
Establecidos por el Usuario y almacenados en el localstorage para un acceso mas rapido en futuras partidas.
Rasgos:
    +   Id: El identificador de acceso rapido del Personaje por el programa.
    +   Nombre: El identificador para lectura del Personaje por el Usuario.

### Eventos
Establecidos por defecto, estos tendran efecto en los Personajes participantes. Pueden tener ciertos requisitos para que se lleven a cabo.
Rasgos:
    +   Id: El identificador de acceso rapido del Evento por el programa.
    +   Texto La descripcion de lo que provoca el Evento. El texto tendra dentro de su contenido `{id_usuario}` que representara el Personaje participe dentro del Evento en caso de ser necesario.
    +   Cantidad de Usuario Afectados: Numero que determina cuantos Personajes participan en el Evento.
    +   Efecto producido: El efecto provocado por el Evento en los Personajes participantes.
    +   Evento padre: En caso de existir, el Evento padre necesario para que se de el Evento.
    +   Dia necesario: La cantidad de dias necesarios para que se de el Evento.
    +   Jugadores necesarios: La cantidad de jugadores necesarios para que se de el Evento.
    +   Repeticion: Un booleano que determina si el Evento puede o no repetirse a lo largo de la partida.

### Dias
Establecidos por defecto, estos serviran como el contador de rondas que lleva la partida.
Rasgos:
    +   Id: El identificador de acceso rapido del Dia por el programa.
    +   Numero: El identificador para lectura del Dia por el Usuario.