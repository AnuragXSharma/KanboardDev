<div class="project-header" >
    <?= $this->hook->render('template:project:header:before', array('project' => $project)) ?>
    
        <?= $this->render('project_header/views', array('project' => $project, 'filters' => $filters,'board_view' => $board_view)) ?>
        
    <div class="filter-box-component">
        <?= $this->render('project_header/search', array(
            'project' => $project,
            'filters' => $filters,
            'custom_filters_list' => isset($custom_filters_list) ? $custom_filters_list : array(),
            'users_list' => isset($users_list) ? $users_list : array(),
            'categories_list' => isset($categories_list) ? $categories_list : array(),
        )) ?>
    </div>
    
    <?= $this->hook->render('template:project:header:after', array('project' => $project)) ?>
</div>
