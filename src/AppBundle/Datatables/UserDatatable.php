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
 * Class UserDatatable
 *
 * @package AppBundle\Datatables
 */
class UserDatatable extends AbstractDatatable
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
                ))
            ->add('email', Column::class, array(
                'title' => 'Email',
                ))
            ->add('roles', Column::class, array(
                'title' => 'Role',
                'class_name'=>'roles',

            ))
            ->add('StandOrt.StandOrt_Name', Column::class, array(
                'title' => 'StandOrt_Name',
                ))
            ->add(null, ActionColumn::class, array(
                'title' => 'Löschen',
                'actions' => array(
                    array(
                        'route' => 'user_delete',
                        'route_parameters' => array(
                            'id' => 'id',
                            'type' => 'testtype',
                            '_format' => 'html',
                            '_locale' => 'de',
                        ),
                        'icon' => 'glyphicon glyphicon glyphicon-trash',
                        'label' => 'Löschen',
                        'confirm' => false,
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => 'Show',
                            'class' => 'btn btn-danger btn-xs',
                            'role' => 'button',
                        ),
                    ),
                ),
            ))

        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'AppBundle\Entity\User';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'user_datatable';
    }
}
