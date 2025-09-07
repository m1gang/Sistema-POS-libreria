# Sistema POS - Librería Condisa Romero

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)

## 📋 Descripción

Sistema de Punto de Venta (POS) desarrollado en PHP y MySQL para la gestión integral de la librería Condisa Romero. El sistema permite administrar productos, clientes, ventas, categorías y generar reportes detallados con funcionalidades de facturación en PDF.

## ✨ Características Principales

### 🛍️ Gestión de Productos
- **CRUD completo** de productos con imágenes
- **Categorización** de productos
- **Control de inventario** y stock
- **Búsqueda avanzada** y filtros
- **Gestión de precios** y códigos de barras

### 👥 Gestión de Clientes
- **Registro completo** de clientes
- **Historial de compras** por cliente
- **Datos de contacto** y dirección
- **Sistema de búsqueda** y filtrado

### 💰 Sistema de Ventas
- **Proceso de venta** completo y rápido
- **Cálculo automático** de totales e impuestos
- **Múltiples métodos de pago**
- **Edición de ventas** antes de finalizar
- **Historial completo** de transacciones

### 📊 Reportes y Análisis
- **Reportes de ventas** por período
- **Productos más vendidos**
- **Análisis de vendedores**
- **Reportes de compradores**
- **Gráficos interactivos** de ventas
- **Exportación a PDF**

### 🧾 Facturación
- **Generación automática** de facturas en PDF
- **Plantillas personalizables**
- **Códigos de barras** en facturas
- **Datos fiscales** completos

## 🚀 Tecnologías Utilizadas

### Backend
- **PHP 7.4+** - Lenguaje de programación principal
- **MySQL 5.7+** - Base de datos relacional
- **PDO** - Capa de abstracción de base de datos
- **TCPDF** - Generación de documentos PDF

### Frontend
- **HTML5** - Estructura semántica
- **CSS3** - Estilos y diseño responsivo
- **Bootstrap 3.3.7** - Framework CSS
- **jQuery 3.3.1** - Manipulación del DOM
- **DataTables** - Tablas interactivas
- **Chart.js** - Gráficos y visualizaciones
- **Select2** - Selectores avanzados
- **SweetAlert2** - Alertas y notificaciones

### Librerías y Plugins
- **AdminLTE** - Panel de administración
- **Bootstrap DatePicker** - Selector de fechas
- **Bootstrap TimePicker** - Selector de horas
- **jQuery InputMask** - Máscaras de entrada
- **Morris.js** - Gráficos interactivos
- **PACE** - Indicador de carga

## 📁 Estructura del Proyecto

```
Sistema-POS-libreria/
├── ajax/                          # Archivos AJAX para peticiones asíncronas
│   ├── categorias.ajax.php
│   ├── clientes.ajax.php
│   ├── productos.ajax.php
│   └── usuarios.ajax.php
├── controladores/                 # Lógica de negocio
│   ├── categorias.controlador.php
│   ├── clientes.controlador.php
│   ├── productos.controlador.php
│   ├── usuarios.controlador.php
│   └── ventas.controlador.php
├── modelos/                       # Acceso a datos
│   ├── conexion.php
│   ├── categorias.modelo.php
│   ├── clientes.modelo.php
│   ├── productos.modelo.php
│   ├── usuarios.modelo.php
│   └── ventas.modelo.php
├── vistas/                        # Interfaz de usuario
│   ├── modulos/                   # Módulos principales
│   ├── js/                        # Scripts JavaScript
│   ├── img/                       # Imágenes del sistema
│   └── bower_components/          # Dependencias frontend
├── extensiones/                   # Librerías externas
│   └── tcpdf/                     # Generador de PDF
├── index.php                      # Punto de entrada
├── pos.sql                        # Estructura de la base de datos
└── pos.rar                        # Backup del proyecto
```

## 🛠️ Instalación

### Requisitos del Sistema
- **Servidor Web**: Apache 2.4+ o Nginx
- **PHP**: 7.4 o superior
- **MySQL**: 5.7 o superior
- **Extensiones PHP**: PDO, PDO_MySQL, GD, mbstring

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/m1gang/Sistema-POS-libreria.git
   cd Sistema-POS-libreria
   ```

2. **Configurar la base de datos**
   - Crear una base de datos MySQL
   - Importar el archivo `pos.sql`
   ```sql
   mysql -u usuario -p nombre_base_datos < pos.sql
   ```

3. **Configurar la conexión**
   - Editar `modelos/conexion.php`
   - Actualizar los datos de conexión:
   ```php
   $servidor = "localhost";
   $usuario = "tu_usuario";
   $password = "tu_password";
   $baseDatos = "nombre_base_datos";
   ```

4. **Configurar permisos**
   ```bash
   chmod 755 vistas/img/productos/
   chmod 755 vistas/img/usuarios/
   ```

5. **Acceder al sistema**
   - Abrir navegador en `http://localhost/Sistema-POS-libreria`
   - Usuario por defecto: `admin`
   - Contraseña por defecto: `admin123`

## 👤 Usuarios por Defecto

| Usuario | Contraseña | Rol |
|---------|------------|-----|
| admin   | admin123   | Administrador |
| vendedor| vendedor123| Vendedor |

## 📱 Módulos del Sistema

### 🏠 Dashboard
- Resumen de ventas del día
- Productos con stock bajo
- Gráficos de ventas recientes
- Accesos rápidos a funciones principales

### 📦 Gestión de Productos
- **Agregar productos** con imagen y descripción
- **Editar información** de productos existentes
- **Eliminar productos** del inventario
- **Búsqueda y filtrado** por categoría, nombre o código
- **Control de stock** y alertas de inventario bajo

### 🏷️ Categorías
- **Crear categorías** para organizar productos
- **Editar categorías** existentes
- **Eliminar categorías** (con validación de productos asociados)
- **Vista jerárquica** de categorías

### 👥 Clientes
- **Registro completo** de datos del cliente
- **Historial de compras** por cliente
- **Búsqueda avanzada** de clientes
- **Edición de información** del cliente

### 🛒 Ventas
- **Proceso de venta** paso a paso
- **Selección de productos** con búsqueda rápida
- **Cálculo automático** de totales
- **Múltiples formas de pago**
- **Edición de ventas** antes de finalizar
- **Impresión de tickets** y facturas

### 📊 Reportes
- **Ventas por período** (día, semana, mes, año)
- **Productos más vendidos** con cantidades
- **Análisis de vendedores** y rendimiento
- **Reportes de clientes** y compras
- **Gráficos interactivos** de ventas
- **Exportación a PDF**

### 👤 Usuarios
- **Gestión de usuarios** del sistema
- **Asignación de roles** (Admin, Vendedor)
- **Control de acceso** por módulos
- **Cambio de contraseñas**

## 🔧 Configuración Avanzada

### Personalización de Facturas
- Editar `extensiones/tcpdf/pdf/factura.php`
- Modificar datos de la empresa
- Personalizar diseño y colores

### Configuración de Base de Datos
- Ajustar `modelos/conexion.php`
- Configurar charset y timezone
- Optimizar consultas según necesidades

### Personalización de Interfaz
- Modificar `vistas/plantilla.php`
- Editar estilos en `vistas/dist/css/`
- Personalizar colores y logos

## 🐛 Solución de Problemas

### Error de Conexión a Base de Datos
- Verificar credenciales en `conexion.php`
- Comprobar que MySQL esté ejecutándose
- Verificar permisos de usuario de base de datos

### Problemas con Imágenes
- Verificar permisos de carpetas `img/`
- Comprobar extensión GD de PHP
- Validar formatos de imagen soportados

### Errores de PDF
- Verificar instalación de TCPDF
- Comprobar permisos de escritura
- Validar configuración de fuentes

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para contribuir:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 👨‍💻 Autor

**MiGaNg**
- GitHub: [@m1gang](https://github.com/m1gang)
- Proyecto: Sistema POS para Librería Condisa Romero

## 📞 Soporte

Para soporte técnico o consultas:
- Crear un issue en GitHub
- Contactar al desarrollador

---

⭐ **¡Si este proyecto te ha sido útil, no olvides darle una estrella!** ⭐