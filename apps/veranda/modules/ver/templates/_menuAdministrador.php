<?php
/*
 * Menú de acciones para el actor admin.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
    <li class="menu_role">
    <ul class="menu_sub">
        <li class="menu_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Administrador</a></li>
        <li class="app <?php echo in_array('sf_guard_user', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_user') ?>" class="alternate">Usuarios</a></li>
        <li class="app <?php echo in_array('sf_guard_group', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_group') ?>" class="alternate">Grupos</a></li>
        <li class="app last <?php echo in_array('sf_guard_permission', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_permission') ?>" class="alternate">Permisos</a></li>
    </ul>

    </li>
    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Clientes Veranda</li>
                <li class="app <?php echo in_array('cliente', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@cliente') ?>" class="alternate">Catálogo de clientes</a></li>
                <li class="app  <?php echo in_array('factura', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@factura_cliente') ?>" class="alternate">Razón Social</a></li>
                <li class="app  <?php echo in_array('caratula', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@caratula') ?>" class="alternate">Catalogo de Caratulas</a></li>
                <li class="app  <?php echo in_array('cotizacion', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@cotizacion') ?>" class="alternate">Catalogo de Cotizaciones</a></li>
            </ul>
    </li>