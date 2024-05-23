<?php

namespace Ntt\Blogs\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Ntt\Blogs\Model\ResourceModel\Blog\CollectionFactory;
use Ntt\Blogs\Model\BlogReporte as ReporteModel;

class ReporteDiario extends Command
{
    protected $collectionFactory;
    protected $reportemodel;

    public function __construct(CollectionFactory $collectionFactory, ReporteModel $reportemodel)
    {
        $this->collectionFactory = $collectionFactory;
        $this->reportemodel = $reportemodel;
        parent::__construct(); 
    }

    protected function configure()
    {
        $this->setName('ntt:blogs:report')
            ->setDescription('Genera un reporte diario de blogs');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Comienzo del proceso de guardado en tabla');

        // Obtener la colección
        $collection = $this->collectionFactory->create();
        $data = $collection->getItems();

        // Verificar el número de elementos en la colección
        $output->writeln('Número de elementos en la colección: ' . count($data));

        // Obtener la fecha actual
        $today = new \DateTime();
        $todayDate = $today->format('Y-m-d');
        $contadorpost = 0;

        // Recorrer la colección
        foreach ($data as $item) {
            $horaDeCreacion = new \DateTime($item->getData('hora_de_creacion'));
            $horaDeCreacionDate = $horaDeCreacion->format('Y-m-d');

            $horaDeModificacion = new \DateTime($item->getData('hora_de_la_ultima_actualizacion'));
            $horaDeModificacionDate = $horaDeModificacion->format('Y-m-d');

            // Comparar la fecha de creación o modificación con la fecha de hoy
            if ($horaDeCreacionDate === $todayDate || $horaDeModificacionDate === $todayDate) {
                $contadorpost++;
            }
        }
        $output->writeln('Cantidad de posts creados o modificados hoy: ' .$todayDate.' = '. $contadorpost);
        // Guardar el contador en el modelo de reporte
        $this->reportemodel->setData([
            'cantidad' => $contadorpost
        ]);
        $this->reportemodel->save();

        $output->writeln('Fin del proceso de guardado en tabla');

        return Command::SUCCESS;
    }
}
