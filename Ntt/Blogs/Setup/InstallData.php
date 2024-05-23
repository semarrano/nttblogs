<?php

namespace Ntt\Blogs\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $data = [
            [
                'nombre' => 'Seguridad',
                'titulo' => 'Cómo mantener tu computadora segura',
                'contenido' => 'Para mantener la seguridad de tus dispositivos y datos personales, es crucial seguir algunas recomendaciones clave. Primero, mantén tu software siempre actualizado, ya que las actualizaciones suelen incluir parches de seguridad importantes. Además, utiliza contraseñas fuertes y únicas para cada una de tus cuentas, asegurándote de que sean difíciles de adivinar. Por último, evita hacer clic en enlaces sospechosos que puedas recibir por correo electrónico o en mensajes instantáneos, ya que podrían ser intentos de phishing diseñados para robar tu información personal.',
                'imagen' => 'imagen1.jpg',
                'estado' => 1,
            ],
            [
                'nombre' => 'Buenas Practicas',
                'titulo' => 'Mejores prácticas para la gestión de contraseñas',
                'contenido' => 'Para proteger tu información personal y mantener tus cuentas seguras, es fundamental seguir algunas prácticas recomendadas. Primero, utiliza un gestor de contraseñas, ya que te permite generar y almacenar contraseñas únicas y fuertes para cada una de tus cuentas, evitando así la reutilización de contraseñas, lo cual es una práctica arriesgada que puede comprometer tu seguridad. Además, habilita la autenticación de dos factores (2FA) en todas las cuentas que lo permitan. Esta capa adicional de seguridad requiere no solo tu contraseña, sino también un segundo factor de verificación, como un código enviado a tu teléfono móvil, lo que dificulta el acceso no autorizado a tus cuentas. Siguiendo estos consejos, puedes reforzar significativamente la seguridad de tu información en línea.',
                'imagen' => 'imagen2.png',
                'estado' => 1,
            ],
            [
                'nombre' => 'Optimizacion',
                'titulo' => 'Cómo optimizar el rendimiento de tu PC',
                'contenido' => 'Para optimizar el rendimiento de tu computadora, es importante seguir algunos pasos esenciales. Primero, limpia regularmente los archivos temporales para liberar espacio en el disco y mejorar la velocidad del sistema. Segundo, desfragmenta el disco duro para reorganizar los datos y facilitar un acceso más rápido. Finalmente, desactiva los programas innecesarios que se ejecutan al inicio, ya que estos pueden ralentizar el tiempo de arranque y consumir recursos valiosos. Siguiendo estas prácticas, puedes mantener tu computadora funcionando de manera eficiente.',
                'imagen' => 'imagen3.jpg',
                'estado' => 1,
            ],
        ];

        foreach ($data as $item) {
            $setup->getConnection()->insert($setup->getTable('ntt_blogs'), $item);
        }

        $setup->endSetup();
    }
}
