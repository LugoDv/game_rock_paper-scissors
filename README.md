# 🎮 Rock, Paper, Scissors Game

Un juego clásico de Piedra, Papel o Tijeras implementado en PHP con un diseño retro pixel art. Juega contra la computadora y lleva un registro de tus estadísticas de juego.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📋 Descripción

Este proyecto es una implementación web del juego tradicional de Piedra, Papel o Tijeras. Los jugadores pueden competir contra la computadora, que hace selecciones aleatorias. El juego rastrea las estadísticas de victoria, derrota y empate a través de sesiones PHP.

## ✨ Características

- 🎲 **Juego contra la IA**: La computadora selecciona aleatoriamente entre piedra, papel o tijeras
- 📊 **Sistema de estadísticas**: Rastrea victorias, derrotas, empates y total de partidas
- 💾 **Persistencia de sesión**: Las estadísticas se mantienen durante la sesión del navegador
- 🎨 **Diseño retro**: Interfaz con estilo pixel art usando la fuente "Press Start 2P"
- 🔄 **Reset de partida**: Opción para reiniciar las estadísticas en cualquier momento
- 📱 **Responsive**: Diseño adaptable a diferentes tamaños de pantalla

## 🚀 Instalación

### Requisitos previos

- PHP 7.0 o superior
- Servidor web (Apache, Nginx, etc.) o PHP built-in server
- Navegador web moderno

### Pasos de instalación

1. **Clona el repositorio**

   ```bash
   git clone <url-del-repositorio>
   cd game_rock_paper_scissors
   ```

2. **Configura el servidor**

   Opción A - Usando el servidor integrado de PHP:

   ```bash
   php -S localhost:8000
   ```

   Opción B - Copia el proyecto a tu servidor web (Apache/Nginx):

   ```bash
   cp -r . /var/www/html/game_rock_paper_scissors
   ```

3. **Accede a la aplicación**

   Abre tu navegador y visita:

   - `http://localhost:8000` (si usas el servidor PHP)
   - `http://localhost/game_rock_paper_scissors` (si usas Apache/Nginx)

## 📁 Estructura del Proyecto

```
game_rock_paper_scissors/
│
├── index.php              # Página principal y menú de navegación
├── index.css              # Estilos de la página principal
│
├── assets/                # Recursos multimedia
│   ├── background1920x1080.jpg
│   ├── stone.png
│   ├── paper.png
│   ├── scissors.png
│   ├── puno-boton.png
│   ├── mano-boton.png
│   └── tijera-buton.png
│
├── src/                   # Lógica del juego
│   ├── game.php          # Interfaz y lógica principal del juego
│   ├── data.php          # Página de estadísticas
│   └── resetGame.php     # Script para reiniciar estadísticas
│
└── style/                 # Hojas de estilo
    ├── game.css          # Estilos del juego
    └── data.css          # Estilos de estadísticas
```

## 🎮 Cómo Jugar

1. **Inicio**: Accede a la página principal (`index.php`)
2. **Comenzar**: Haz clic en "Start Game" para iniciar una nueva partida
3. **Selección**: Elige entre piedra, papel o tijeras haciendo clic en el botón correspondiente
4. **Resultado**: El juego mostrará tu elección, la elección de la PC y el resultado (WIN/LOSE/DRAW)
5. **Estadísticas**: Accede a las estadísticas desde el menú para ver tu rendimiento
6. **Reiniciar**: Usa el botón "Reset Game" para borrar todas las estadísticas

## 🧮 Reglas del Juego

- 🪨 **Piedra** vence a ✂️ **Tijeras**
- 📄 **Papel** vence a 🪨 **Piedra**
- ✂️ **Tijeras** vence a 📄 **Papel**
- Misma elección = **Empate**

## 💻 Funcionalidades Técnicas

### Sistema de Sesiones

El juego utiliza sesiones PHP para mantener las estadísticas:

```php
$_SESSION['stadistics'] = [
    "wins" => 0,
    "losses" => 0,
    "draws" => 0,
    "games" => 0,
];
```

### Lógica de Juego

La función principal `game()` determina el ganador:

- Compara las opciones del jugador y la PC
- Actualiza las estadísticas en la sesión
- Retorna el resultado (WIN/LOSE/DRAW)

### Estadísticas

Las estadísticas se calculan como porcentajes:

- % de victorias = (victorias / total de partidas) × 100
- % de derrotas = (derrotas / total de partidas) × 100
- % de empates = (empates / total de partidas) × 100

## 🎨 Personalización

### Cambiar colores o estilos

Edita los archivos CSS en la carpeta `style/`:

- `game.css`: Estilos de la interfaz de juego
- `data.css`: Estilos de la página de estadísticas
- `index.css`: Estilos de la página principal

### Modificar imágenes

Reemplaza las imágenes en la carpeta `assets/` manteniendo los mismos nombres de archivo.

## 🐛 Solución de Problemas

### Las estadísticas no se guardan

- Asegúrate de que las sesiones PHP estén habilitadas en tu configuración
- Verifica que las cookies estén habilitadas en el navegador

### Las imágenes no se cargan

- Verifica que la carpeta `assets/` tenga los permisos correctos
- Comprueba las rutas relativas en los archivos PHP

### Error al resetear el juego

- Asegúrate de que `session_start()` se llame antes de `session_destroy()`

## 📝 Licencia

Este proyecto es de código abierto y está disponible para uso personal y educativo.

## 👨‍💻 Autor

Desarrollado con ❤️ usando PHP, HTML y CSS

## 🔮 Futuras Mejoras

- [ ] Implementar base de datos para estadísticas permanentes
- [ ] Añadir modo multijugador
- [ ] Agregar efectos de sonido
- [ ] Implementar sistema de rankings
- [ ] Añadir animaciones de transición
- [ ] Modo de dificultad (IA más inteligente)
- [ ] Versión PWA (Progressive Web App)

---

¿Disfrutaste el juego? ⭐ Dale una estrella al repositorio!
