<?php
/*
 * Menú de acciones para el actor Secretaria del IPE.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Clientes Veranda</li>
                <li class="app <?php echo in_array('cliente', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@cliente') ?>" class="alternate">Catálogo de clientes</a></li>
                <li class="app last <?php echo in_array('factura', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@factura_cliente') ?>" class="alternate">Razón Social</a></li>
            </ul>
    </li>