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
 * Class StandOrtDatatable
 *
 * @package AppBundle\Datatables
 */
class StandOrtDatatable extends AbstractDatatable
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
            'page_length'=>5,
            'length_menu'=> [ [5, 10, 15, -1], [5, 10, 15, "All"] ],
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

        $this->columnBuilder
            ->add('id', Column::class, array(
                'title' => 'Id',

                ))
            ->add('StandOrt_Name', Column::class, array(
                'title' => 'StandOrt_Name',
                'class_name'=>'roles',
                'editable' => array(TextEditable::class, array(
                    //'pk' => 'id',
                    'placeholder' => 'Edit value',
                    'empty_text' => 'Empty Text',
                    'mode'=>'inline',
                )
                )
                ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'AppBundle\Entity\StandOrt';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'standort_datatable';
    }
}
