# MedGestión - Sistema de Gestión de Citas Médicas

Este es un sistema interno de gestión de citas médicas modernizado, basado originalmente en **PHPRunner 10.0** y potenciado con una interfaz moderna utilizando **Bulma CSS**, **FontAwesome 6** y **Chart.js**.

## Características Principales

- **Interfaz Moderna**: Diseño limpio, intuitivo y responsivo utilizando Bulma CSS con efectos de glassmorphism.
- **Dashboards por Rol**: Vistas personalizadas y optimizadas para Recepción, Médicos y Pacientes.
- **Notificaciones Inteligentes**: Sistema de alertas en tiempo real para citas del día actual.
- **Reportes Visuales**: Gráficos interactivos para el análisis de citas por estado y especialidad.
- **Búsqueda Global**: Buscador unificado para localizar rápidamente pacientes, médicos y citas.
- **Compatibilidad**: Mantiene total compatibilidad con la lógica de negocio y base de datos de PHPRunner 10.0.

## Roles del Sistema

1. **Recepción (`recepcion`)**:
   - Control total de la agenda diaria.
   - Registro de nuevos pacientes y agendamiento de citas.
   - Monitoreo de estados de confirmación.
2. **Médico (`medico`)**:
   - Vista priorizada de su agenda clínica personal.
   - Acceso rápido a expedientes de pacientes.
   - Registro de diagnósticos, tratamientos y recetas.
3. **Paciente (`cliente`)**:
   - Consulta de próximas citas y recordatorios.
   - Acceso a su historial de atenciones y recetas emitidas.
4. **Administrador (`admin`)**:
   - Acceso total a la configuración del sistema y gestión de usuarios.

## Estructura del Proyecto Modernizado

- `output/custom/css/bulma-medical.css`: Estilos personalizados de la nueva interfaz.
- `output/custom/lib/medical_dashboard.php`: Biblioteca central de funciones UI y lógica de dashboards.
- `output/dashboard.php`: Punto de entrada que redirige al dashboard según el rol.
- `output/dashboard_[rol].php`: Implementaciones específicas de cada dashboard.
- `output/search_bulma.php`: Motor de búsqueda global modernizado.
- `output/citas_list_bulma.php`: Listado de citas optimizado con filtros Bulma.

## Mantenimiento y Extensibilidad

Para mantener la compatibilidad con PHPRunner:

- **No modificar** los archivos en `output/templates/` o archivos `.php` generados directamente por PHPRunner si planeas regenerar el proyecto.
- Las nuevas funcionalidades deben residir en archivos independientes (como los archivos `_bulma.php`) o dentro de la carpeta `output/custom/`.
- Si regeneras el proyecto con PHPRunner, asegúrate de que los enlaces en el menú principal apunten a los nuevos dashboards y vistas Bulma.

## Instalación y Configuración

1. Importar la base de datos `db_citas_medicas.sql` en tu servidor MySQL.
2. Configurar la conexión a la base de datos en los archivos de PHPRunner (`output/connections/ConnectionManager.php`).
3. Desplegar el contenido de la carpeta `output/` en tu servidor web compatible con PHP.
4. Acceder a `dashboard.php` tras iniciar sesión para entrar a la nueva experiencia de usuario.

---
*Desarrollado con enfoque en la usabilidad y eficiencia clínica.*
