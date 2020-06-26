<?php

namespace AppBundle\Datatables;

use Sg\DatatablesBundle\Datatable\AbstractDatatable;
use Sg\DatatablesBundle\Datatable\Style;
use Sg\DatatablesBundle\Datatable\Column\Column;
use Sg\DatatablesBundle\Datatable\Column\BooleanColumn;
use Sg\DatatablesBundle\Datatable\Column\ActionColumn;
use Sg\DatatablesBundle\Datatable\Column\MultiselectColumn;
use Sg\DatatablesBundle\Datatable\Column\VirtualColumn;
use Sg\DatatablesBundle\Datatable\Column\DateTimeColumn;
use Sg\DatatablesBundle\Datatable\Column\ImageColumn;
use Sg\DatatablesBundle\Datatable\Filter\TextFilter;
use Sg\DatatablesBundle\Datatable\Filter\NumberFilter;
use Sg\DatatablesBundle\Datatable\Filter\SelectFilter;
use Sg\DatatablesBundle\Datatable\Filter\DateRangeFilter;
use Sg\DatatablesBundle\Datatable\Editable\CombodateEditable;
use Sg\DatatablesBundle\Datatable\Editable\SelectEditable;
use Sg\DatatablesBundle\Datatable\Editable\TextareaEditable;
use Sg\DatatablesBundle\Datatable\Editable\TextEditable;

/**
 * Class CompanyEventsDatatable
 *
 * @package AppBundle\Datatables
 */
class CompanyEventsDatatable extends AbstractDatatable
{
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array $options = array())
    {
        $this->language->set(array(
            'language' => 'de'
        ));

        $this->ajax->set(array(
        ));

        $this->options->set(array(
            'classes' => Style::BOOTSTRAP_3_STYLE,
            'stripe_classes' => [ 'strip1', 'strip2', 'strip3' ],
            'individual_filtering' => false,
            'individual_filtering_position' => 'head',
            'order_cells_top' => true,
            'order' => array(array(0, 'asc')),
            'page_length'=>10,
            'length_menu'=> [ [10,20,40,-1], [10,20,40,"Alle"] ],
            'dom' => 'lBftip',
            //'global_search_type' => 'gt',
            'search_in_non_visible_columns' => false
        ));
        $this->features->set(array(
            'auto_width' => true,
            'processing' => true,
            'paging'=>true,
            'scroll_x' => true,
            'scroll_y' => ''
        ));
        $this->extensions->set(array(
            'buttons' =>true));

        $this->callbacks->set(array(
            'draw_callback' => array(
                'template' => ':callback:draw_callback.js.twig',
            ),
        ));


        $this->columnBuilder
            ->add('id', Column::class, array(
                'title' => 'Id',
                ))
            ->add('EinzelFach.EinzelFach_Name', Column::class, array(
                'title' => 'EinzelFach',
                ))
            ->add('Dozent.Dozent_Name', Column::class, array(
                'title' => 'Dozent',
                ))
            ->add('SchuleGroup.Group_Name', Column::class, array(
                'title' => 'Gruppe Name',
                ))
            ->add('eventtype.Event_Type_Name', Column::class, array(
                'title' => 'Type',
                'visible'=>false,
                ))
            ->add('StandOrt.StandOrt_Name', Column::class, array(
                'title' => 'StandOrt',
                'visible'=>false,
                ))
            ->add('EventHours', Column::class, array(
                'title' => 'Unterrich Anzahl',
                ))
            ->add('EventDate', Column::class, array(
                'title' => 'Unterrich Datum',
                ));
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'AppBundle\Entity\CompanyEvents';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'companyevents_datatable';
    }
}
