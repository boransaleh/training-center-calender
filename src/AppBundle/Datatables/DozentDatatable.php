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
 * Class DozentDatatable
 *
 * @package AppBundle\Datatables
 */
class DozentDatatable extends AbstractDatatable
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
            'individual_filtering' => true,
            'individual_filtering_position' => 'foot',
            'order' => array(array(0, 'asc')),
            'order_cells_top' => true,
            'dom' => 'Bfrtip',
            //'global_search_type' => 'gt',
            'search_in_non_visible_columns' => true
        ));

        $this->features->set(array(
            'auto_width' => true,
            'processing' => true,
            'searching'=>true,
            'paging'=>false,

        ));
        $this->extensions->set(array(
            'buttons' =>true));

        $this->columnBuilder
            ->add('id', Column::class, array(
                'title' => 'Id',
                'searchable' => false,
                ))
            ->add('Dozent_Name', Column::class, array(
                'title' => 'Dozent_Name',
                'searchable' => true,
                'editable' => array(TextEditable::class, array(
                    //'pk' => 'cid',
                    'mode'=>'inline',
                    'empty_class'=>'akh'
                ))
                ))
            ->add('Dozent_StandOrt.StandOrt_Name', Column::class, array(
                'title' => 'StandOrt',
                'visible'=>false,
            ))
            ->add('Dozent_Email', Column::class, array(
                'title' => 'Dozent_Email',
                'searchable' => false,
                'filter' => array(TextFilter::class, array(
                    'search_type' => 'eq',
                    'classes' => 'form-control',
                )),
                'editable' => array(TextEditable::class, array(
                    //'pk' => 'cid',
                    'mode'=>'inline',
                    'empty_class'=>'akh'
                ))
                ))
            ->add('Gultig', BooleanColumn::class,array(
                'title' => 'Gultig/Ungultig',
                'editable' => array(SelectEditable::class, array(
                    'source' => array(
                        array('value' => 1, 'text' => 'gultig'),
                        array('value' => 0, 'text' => 'Ungultig'),
                    ),
                    'mode' => 'inline',
                    //'pk' => 'cid',
                    'empty_text' => '',
                )),
                'type_of_field'=>'boolean',
                'true_icon' => 'glyphicon glyphicon-ok',
                'false_icon' => 'glyphicon glyphicon-remove',
                'true_label'=>' Gultig',
                'false_label'=>' Ungultig',
                'searchable' => true,
                'filter' => array(SelectFilter::class, array(
                    'classes' => 'form-control input-sm',
                    'search_type' => 'eq',
                    'select_options' => array(
                        '' => 'Alle',
                        '1' => 'gultig',
                        '0' => 'Ungultig'
                    ),
                )),
               ));
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'AppBundle\Entity\Dozent';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'dozent_datatable';
    }
}
