# Sistema Médico - Gestión de Citas

Sistema interno de gestión de citas médicas generado originalmente con **PHPRunner 10.0**. El proyecto administra pacientes, médicos, especialidades, usuarios y citas, manteniendo el flujo estándar de PHPRunner para listados, altas, edición, búsqueda, importación y exportación.

## Objetivo

Centralizar la operación diaria de una clínica o consultorio mediante una interfaz sencilla para:

- Registrar pacientes, médicos y especialidades.
- Programar y consultar citas médicas.
- Controlar el estado de cada cita: `Pendiente`, `Confirmada`, `Cancelada` o `Atendida`.
- Registrar diagnóstico, tratamiento, receta y notas de atención.
- Mostrar dashboards diferenciados por rol.
- Entregar notificaciones de citas pendientes para el día actual.
- Consultar reportes operativos por estado, especialidad y mes.

## Stack y compatibilidad

- PHP compatible con el código generado por PHPRunner 10.0.
- Base de datos MySQL/MariaDB definida en `db_citas_medicas.sql`.
- Interfaz modernizada con **Bulma CSS** para las nuevas vistas personalizadas.
- Se conserva Bootstrap/Bootswatch en las pantallas generadas por PHPRunner para evitar romper plantillas internas; las nuevas pantallas Bulma se agregan como páginas independientes dentro de `output/`.

## Modelo de datos principal

El esquema incluye las tablas:

- `especialidades`: catálogo de especialidades médicas.
- `medicos`: médicos y su especialidad.
- `pacientes`: información demográfica y de contacto.
- `citas`: agenda médica, estado y detalles clínicos.
- `usuarios`: credenciales y tipo de usuario.

La extensión agregada al esquema permite vincular usuarios de tipo `cliente` con un registro de `pacientes` mediante `usuarios.id_paciente`.

## Roles del sistema

- **Recepción (`recepcion`)**: gestiona agenda, pacientes, confirmaciones y reportes operativos.
- **Médico (`medico`)**: consulta su agenda, pacientes asignados y seguimiento clínico.
- **Paciente/Cliente (`cliente`)**: consulta sus próximas citas y notificaciones.
- **Administrador (`admin`)**: puede usar el panel operativo general y las funciones generadas por PHPRunner.

## Nuevas vistas Bulma

Las vistas personalizadas se ubican en `output/` y usan componentes compartidos de `output/custom/lib/medical_dashboard.php`:

- `dashboard.php`: redirecciona al dashboard según el rol del usuario autenticado.
- `dashboard_recepcion.php`: panel operativo para recepción.
- `dashboard_medico.php`: panel clínico para médicos.
- `dashboard_cliente.php`: panel del paciente/cliente.
- `notificaciones.php`: alertas de citas pendientes o confirmadas para hoy.
- `reportes.php`: indicadores por estado, especialidad y actividad mensual.

## Uso básico

1. Importar o actualizar la base de datos con `db_citas_medicas.sql`.
2. Publicar el contenido de `output/` en el servidor configurado para PHPRunner.
3. Configurar la conexión a base de datos en los archivos generados por PHPRunner si cambia el entorno.
4. Iniciar sesión con un usuario activo.
5. Entrar a `dashboard.php` para acceder automáticamente al dashboard del rol correspondiente.

## Mantenimiento

Para mantener compatibilidad con PHPRunner:

- Evitar editar masivamente plantillas generadas si luego se regenerará el proyecto.
- Mantener nuevas funcionalidades en `output/custom/` o páginas PHP independientes.
- Si se regenera desde PHPRunner, revisar que los enlaces del menú a dashboards, notificaciones y reportes se conserven.
