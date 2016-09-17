<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Hola';
    $t['view_site'] = 'Ver Sitio';
    $t['logout'] = 'Cerrar sesión';
    $t['javascript_msg'] = 'JavaScript está deshabilitado o no es soportado por tu navegador.
                            Por favor actualiza tu navegador o <a href="https://support.google.com/answer/23852" target="_blank">habilita JavaScript</a> para usar el Panel de Administración.';
    $t['add_new'] = 'Añadir nuevo';
    $t['add_new_page'] = 'Añadir una nueva página';
    $t['add_new_user'] = 'Añadir un nuevo usuario';
    $t['view'] = 'Ver';
    $t['list'] = 'Lista';
    $t['edit'] = 'Editar';
    $t['delete'] = 'Borrar';
    $t['delete_selected'] = 'Borrar seleccionados';
    $t['advanced_settings'] = 'Configuraciones Avanzadas';

    // Sidebar

    $t['comment'] = 'Comentar';
    $t['comments'] = 'Comentarios';
    $t['manage_comments'] = 'Administrar Comentarios';
    $t['users'] = 'Usuarios';
    $t['manage_users'] = 'Administrar Usuarios';

    // List pages

    $t['view_all_folders'] = 'Ver todas las carpetas';
    $t['filter'] = 'Filtrar';
    $t['showing'] = 'Mostrando';
    $t['title'] = 'Título';
    $t['folder'] = 'Carpeta';
    $t['date'] = 'Fecha';
    $t['actions'] = 'Acciones';
    $t['no_pages_found'] = 'No se encontraron páginas';
    $t['published'] = 'Publicado';
    $t['unpublished'] = 'Sin publicar';
    $t['confirm_delete_page'] = 'Seguro que quieres borrar la página';
    $t['confirm_delete_selected_pages'] = 'Seguro que quieres borrar las páginas seleccionadas?';
    $t['remove_template'] = 'Borrar Plantilla';
    $t['template_missing'] = 'Plantilla faltante';
    $t['prev'] = 'Anterior';
    $t['next'] = 'Siguiente';

    // Pages

    $t['welcome'] = 'Bienvenido';
    $t['no_regions_defined'] = 'No se definieron Regiones Editables aún';
    $t['no_templates_defined'] = 'No hay plantillas gestionadas por el CMS';
    $t['access_level'] = 'Nivel de Acceso';
    $t['superadmin'] = 'Super Administrador';
    $t['admin'] = 'Administrador';
    $t['authenticated_user_special'] = 'Usuario Autenticado (Especial)';
    $t['authenitcated_user'] = 'Usuario Autenticado';
    $t['unauthenticated_user'] = 'Cualquiera';
    $t['allow_comments'] = 'Permitir a los usuarios comentar';
    $t['status'] = 'Estado';
    $t['name'] = 'Nombre';
    $t['title_desc'] = 'deje este campo en blanco para usar el título que el sistema genera a partir del nombre del archivo';
    $t['required'] = 'requerido';
    $t['required_msg'] = 'El campo requerido no puede omitirse';
    $t['browse_server'] = 'Explorar Servidor';
    $t['view_image'] = 'Ver Imagen';
    $t['thumb_created_auto'] = 'Será creado automáticamente';
    $t['recreate'] = 'Recrear';
    $t['thumb_recreated'] = 'Vista previa recreada';
    $t['crop_from'] = 'Cortando desde';
    $t['top_left'] = 'Superior Izquierdo';
    $t['top_center'] = 'Superior Centro';
    $t['top_right'] = 'Superior Derecho';
    $t['middle_left'] = 'Medio Izquierdo';
    $t['middle'] = 'Medio';
    $t['middle_right'] = 'Medio Derecho';
    $t['bottom_left'] = 'Inferior Izquierdo';
    $t['bottom_center'] = 'Inferior Centro';
    $t['bottom_right'] = 'Inferior Derecho';
    $t['view_thumbnail'] = 'Ver Vista previa';
    $t['field_not_found'] = 'Campo no encontrado';
    $t['delete_permanently'] = 'Borrar permanentemente?';
    $t['view_code'] = 'Ver Código';
    $t['confirm_delete_field'] = 'Está seguro que quiere eliminar este campo permanentemente?';
    $t['save'] = 'Guardar';

    // Comments

    $t['all'] = 'Todos';
    $t['unapprove'] = 'Reprobar';
    $t['unapproved'] = 'Reprobado';
    $t['approve'] = 'Aprobar';
    $t['approved'] = 'Aprobado';
    $t['select-deselect'] = 'Seleccionar/Deseleccionar Todo';
    $t['confirm_delete_comment'] = 'Está seguro que quiere eliminar este comentario?';
    $t['confirm_delete_selected_comments'] = 'Está seguro que quiere eliminar los comentarios seleccionados?';
    $t['bulk_action'] = 'Acción múltiple para los seleccionados';
    $t['apply'] = 'Aplicar';
    $t['submitted_on'] = 'Enviado en';
    $t['email'] = 'Dirección de E-mail';
    $t['website'] = 'Sitio Web';
    $t['duplicate_content'] = 'Contenido Duplicado';
    $t['insufficient_interval'] = 'Intervalo insuficiente entre comentarios';

    // Users

    $t['user_name_restrictions'] = 'Solamente caracteres en minúsculas, números, guiones y guiones bajos están permitidos';
    $t['display_name'] = 'Mostar Nombre';
    $t['role'] = 'Rol';
    $t['no_users_found'] = 'No se encontraron usuarios';
    $t['confirm_delete_user'] = 'Está seguro que quiere elimiar al usuario';
    $t['confirm_delete_selected_users'] = 'Está seguro que quiere elimiar a los usuarios seleccionados?';
    $t['disabled'] = 'Deshabilitado';
    $t['new_password'] = 'Nueva Contraseña';
    $t['new_password_msg'] = 'Si desea cambiar de contraseña escriba una nueva, de lo contrario, deje este espacio en blanco';
    $t['repeat_password'] = 'Repetir Contraseña';
    $t['repeat_password_msg'] = 'Escriba su nueva contraseña otra vez';
    $t['user_name_exists'] = 'El nombre de usuario ya existe';
    $t['email_exists'] = 'La dirección de E-mail ya existe';

    // Login

    $t['user_name'] = 'Nombre de Usuario';
    $t['password'] = 'Contraseña';
    $t['login'] = 'Ingresar';
    $t['forgot_password'] = 'Olvidó su contraseña?';
    $t['prompt_cookies'] = 'Las cookies deben estar habilitadas para usar este CMS';
    $t['prompt_username'] = 'Por favor introduzca su nombre de usuario';
    $t['prompt_password'] = 'Por favor introduzca su contraseña';
    $t['invalid_credentials'] = 'Usuario o Contraseña inválidos';
    $t['account_disabled'] = 'Cuenta inhabilitada';
    $t['access_denied'] = 'Acceso Denegado';
    $t['insufficient_privileges'] = 'No tiene los privilegios suficientes para ver la página solicitada. Para acceder a esta página debe cerrar sesión e iniciar con mayores privilegios';

    // Password recovery

    $t['recovery_prompt'] = 'Por favor introduzca su nombre de usuario o dirección de E-mail.<br/>
                            Recibirá su contraseña por correo electrónico.';
    $t['name_or_email'] = 'Su nombre de usuario o E-mail';
    $t['submit'] = 'Enviar';
    $t['submit_error'] = 'Por favor introduzca su nombre de usuario o dirección E-mail';
    $t['no_such_user'] = 'No existe este usuario';
    $t['reset_req_email_subject'] = 'Reinicio de contraseña pedido';
    $t['reset_req_email_msg_0'] = 'Un pedido para reiniciar la contraseña a sido pedido para el siguiente sitio y usuario:';
    $t['reset_req_email_msg_1'] = 'Para confirmar que el pedido lo hizo Ud. por favor visite el siguiente enlace, de otro modo ignore este mensaje.';
    $t['email_failed'] = 'El E-mail no pudo enviarse';
    $t['reset_req_email_confirm'] = 'Se le ha enviado un mail de confirmación.<br/>
                                    Por favor revise su casilla de correo.';
    $t['invalid_key'] = 'Clave inválida';
    $t['reset_email_subject'] = 'Su nueva contraseña';
    $t['reset_email_msg_0'] = 'Su contraseña se ha restaurado para el siguiente sitio y usuario:';
    $t['reset_email_msg_1'] = 'Puede cambiar su contraseña una vez iniciada la sesión';
    $t['reset_email_confirm'] = 'Su contraseña ha sido restaurada.<br/>
    Por favor revise su casilla de correo para ver su nueva contraseña.';

    // Maintenance Mode

    $t['back_soon'] = '<h2>Modo de Mantenimiento</h2>
                        <p>
                        Lamentamos los inconvenientes.<br/>
                        Nuestro sitio se encuentra en una pausa programada de mantenimiento.<br/>
                        <b>Por favor vuelva a intentar dentro de unos minutos</b>
                        </p>';

    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel

    $t['admin_panel'] = 'Panel de Administración';
    $t['login_title'] = 'CouchCMS';

    // Folders

    $t['no_folders'] = 'No se definieron carpetas';
    $t['select_folder'] = 'Seleccionar carpeta';
    $t['folders'] = 'Carpetas';
    $t['manage_folders'] = 'Gestionar Carpetas';
    $t['add_new_folder'] = 'Añadir una carpeta';
    $t['parent_folder'] = 'Carpeta Padre';
    $t['weight'] = 'Indice';
    $t['weight_desc'] = 'Cuanto más alto el valor, más abajo aparecerá el ítem en la lista. Pueden usarse valores negativos';
    $t['desc'] = 'Descripción';
    $t['image'] = 'Imagen';
    $t['cannot_be_own_parent'] = 'No puede ser su propio padre';
    $t['name_already_exists'] = 'El nombre ya existe';
    $t['pages'] = 'Páginas';
    $t['none'] = 'Ninguno';
    $t['confirm_delete_folder'] = 'Está seguro que quiere eliminar la carpeta';
    $t['confirm_delete_selected_folders'] = 'Está seguro que quiere eliminar las carpetas seleccionadas?';


    // Drafts

    $t['draft_caps'] = 'BORRADOR';
    $t['draft'] = 'Borrador';
    $t['drafts'] = 'Borradores';
    $t['create_draft'] = 'Crear borrador';
    $t['create_draft_msg'] = 'Crear una copia de esta página (después de guardar los cambios)';
    $t['manage_drafts'] = 'Administrar borradores';
    $t['update_original'] = 'Actualizar Original';
    $t['update_original_msg'] = 'Copiar los contenidos de este borrador a la página original (y eliminar el borrador)';
    $t['recreate_original'] = 'Recrear el Original';
    $t['no_drafts_found'] = 'No se encontraron borradores';
    $t['original_page'] = 'Página Original';
    $t['template'] = 'Plantilla';
    $t['modified'] = 'Última Modificación';
    $t['preview'] = 'Vista Previa';
    $t['confirm_delete_draft'] = 'Está seguro que quiere eliminar este borrador';
    $t['confirm_delete_selected_drafts'] = 'Está seguro que quiere eliminar los borradores seleccionados?';
    $t['confirm_apply_selected_drafts'] = 'Está seguro que quiere aplicar los borradores seleccionados?';
    $t['view_all_drafts'] = 'Ver todos los borradores';
    $t['original_deleted'] = 'ORIGINAL ELIMINADO';

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages

    $t['parent_page'] = 'Página Padre';
    $t['page_weight_desc'] = 'Cuanto más alto el valor, más bajo aparecerá en la lista. Puede ser negativo.';
    $t['active'] = 'Activo';
    $t['inactive'] = 'Inactivo';
    $t['menu'] = 'Menú';
    $t['menu_text'] = 'Texto del Menú';
    $t['show_in_menu'] = 'Mostar en el Menú';
    $t['not_shown_in_menu'] = 'No visible en el Menú';
    $t['leave_empty'] = 'Deje en blanco para usar el título de la página';
    $t['menu_link'] = 'Enlace de Menú';
    $t['link_url'] = 'Esta página apunta al siguiente sitio';
    $t['link_url_desc'] = 'Se puede dejar en blanco';
    $t['separate_window'] = 'Abrir en una ventana nueva';
    $t['pointer_page'] = 'Página Puntero';
    $t['points_to_another_page'] = 'Apunta a otra página';
    $t['points_to'] = 'Apunta a';
    $t['redirects'] = 'Redireccionamientos';
    $t['masquerades'] = 'Enmascaramientos';
    $t['strict_matching'] = 'Marcar como seleccionados en el menú todas las páginas debajo de este enlace';
    $t['up'] = 'Ir hacia arriba';
    $t['down'] = 'Ir hacia abajo';
    $t['remove_template_completely'] = 'Borrar todas las páginas y borradores de esta plantilla para eliminarla completamente';
    $t['remove_uncloned_template_completely'] = 'Borrar todos los borradores de esta plantilla para eliminarla completamente';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery

    $t['bulk_upload'] = 'Cargar';
    $t['folder_empty'] = 'Esta carpeta está vacía. Por favor utilice el botón de cargar más arriba para agregar imágenes';
    $t['root'] = 'Raíz';
    $t['item'] = 'imagen';
    $t['items'] = 'imagenes';
    $t['container'] = 'carpeta';
    $t['containers'] = 'carpetas';
    //
    $t['columns_missing'] = 'Algunas columnas perdidas!';
    $t['confirm_delete_columns'] = 'Está seguro que quiere eliminar completamente las columnas perdidas?';
    $t['add_row'] = 'Añadir una fila';
    // 2.0
    $t['left'] = 'Mover a la Izquierda';
    $t['right'] = 'Mover a la Derecha';
    $t['crop'] = 'Recortar';
    $t['menu_templates'] = 'Plantillas';
    $t['menu_modules'] = 'Administración';