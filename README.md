# Proyecto PHP - Documentado (P2 Control de Versiones y Documentación)

Este repositorio es la versión del proyecto `deaw` con **PHPDoc** añadido automáticamente en archivos PHP para facilitar la generación de documentación con **phpDocumentor**.

## Qué incluye esta versión
- Todos los archivos `.php` han sido analizados y se han insertado bloques PHPDoc en:
  - cabeceras de archivo,
  - clases,
  - funciones/métodos (descripciones genéricas y etiquetas `@param` / `@return`).
- `docs/` no está incluida aquí; puedes generarla con phpDocumentor.

## Cómo generar la documentación con phpDocumentor

1. Instala Composer si no lo tienes: https://getcomposer.org/download/

2. Desde la raíz del proyecto:

```bash
# instalar phpDocumentor como dependencia de desarrollo
composer require --dev phpdocumentor/phpdocumentor

# generar la documentación en la carpeta docs/
vendor/bin/phpdoc -d ./ -t ./docs
```

3. Revisa `./docs/index.html` para ver la documentación generada.

## Flujo Git recomendado (resumen)
- Cada colaborador crea su rama: `git checkout -b rama-nombre`
- Hacer mínimo 3 commits documentando/limpiando código
- Abrir Pull Request en GitHub
- El propietario revisa y fusiona
- Generar docs y crear tag/release:
```bash
git tag -a v1.0 -m "Versión final documentada"
git push origin v1.0
```

## Observaciones
- Los comentarios añadidos son genéricos: revisad y mejorad las descripciones y tipos (`@param`, `@return`) manualmente según la lógica real del proyecto.
- Si queréis, puedo intentar un pase más detallado sobre funciones concretas si me indicáis las rutas o las funciones clave.
