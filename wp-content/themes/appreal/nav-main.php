<!-- NAV PANEL -->
    <header class="mainHeader">   
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand siteLogo" href="/"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php $args = array(
                            'menu_id' => 'top',
                            'container' => false,
                            'items_wrap' => '%3$s');
                            wp_nav_menu($args); ?>
                        <li class="hidden-xs showSearchPanel"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                    
                    <form id="searchform2" class="navbar-form navbar-right visible-xs" method="get" role="search" action="<?php echo home_url( '/' ); ?>">
                        <div class="input-group">
                            <input id="s2" name="s" type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-btn">
                                <button class="btn btn-success mobileBtnSearch" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>


    </header>

<!-- SEARCH PANEL -->
    <div class="searchMainPanel hidden-xs" style="display:none;">
        <form id="searchform" class="form-search" method="get" role="search" action="<?php echo home_url( '/' ); ?>">
            <div class="container">
                <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <input type="text" class="search-query" name="s" id="s" placeholder="Start typing to search...">
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <button class="btn">Search</button>
                        </div>

                </div>
            </div>
        </form>
    </div>
