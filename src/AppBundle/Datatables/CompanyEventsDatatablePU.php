<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 10/09/2017
 * Time: 16:35
 */

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

class CompanyEventsDatatablePU extends AbstractDatatable
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
            'order' => array(array(0, 'asc')),
            'page_length'=>10,
            'order_cells_top' => true,
            //'global_search_type' => 'gt',
            'search_in_non_visible_columns' => false
        ));

        $this->features->set(array(
            'auto_width' => true,
            'processing' => true,
            'scroll_x' => true,
            'scroll_y' => ''
        ));
        $this->extensions->set(array(
            'buttons' =>true));

        $this->columnBuilder
            ->add('id', Column::class, array(
                'title' => 'Id',
            ))
            ->add('SchuleGroup.Group_Name', Column::class, array(
                'title' => 'Gruppe Name',
            ))
            ->add('eventtype.Event_Type_Name', Column::class, array(
                'title' => 'Type',
                'visible'=>true,
            ))
            ->add('StandOrt.StandOrt_Name', Column::class, array(
                'title' => 'StandOrt',
                'visible'=>false,
            ))
            ->add('EventHours', Column::class, array(
                'title' => 'Unterrich Anzahl',
                'visible'=>false,
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