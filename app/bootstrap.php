<?php

$bootFile = __DIR__.'/';

require $bootFile . 'core/App/app.php';

require $bootFile.'error/exceptions.php';

require $bootFile.'config/config.php';

require $bootFile . 'core/Services/register_service_providers.php';

require $bootFile . 'services/register_service_providers.php';

require $bootFile . 'services/controller_services.php';

require $bootFile . 'core/Services/controller_services.php';

require $bootFile . 'services/repository_services.php';

require $bootFile . 'core/Services/core_services.php';

require $bootFile . 'services/services.php';

require $bootFile . 'core/routes.php';

require $bootFile.'config/routes.php';