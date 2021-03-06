@extends('layouts/newtimeline')

@section('content')



<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>New Timeline <small>multipurpose timeline sample</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<!-- BEGIN THEME PANEL -->
				<div class="btn-group btn-theme-panel">
					<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
					<i class="icon-settings"></i>
					</a>
					<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3>THEME COLORS</h3>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul class="theme-colors">
											<li class="theme-color theme-color-default" data-theme="default">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Default</span>
											</li>
											<li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Blue Hoki</span>
											</li>
											<li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Blue Steel</span>
											</li>
											<li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Orange</span>
											</li>
											<li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Yellow Crusta</span>
											</li>
										</ul>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul class="theme-colors">
											<li class="theme-color theme-color-green-haze" data-theme="green-haze">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Green Haze</span>
											</li>
											<li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Red Sunglo</span>
											</li>
											<li class="theme-color theme-color-red-intense" data-theme="red-intense">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Red Intense</span>
											</li>
											<li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Purple Plum</span>
											</li>
											<li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Purple Studio</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 seperator">
								<h3>LAYOUT</h3>
								<ul class="theme-settings">
									<li>
										 Theme Style
										<select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
											<option value="boxed" selected="selected">Square corners</option>
											<option value="rounded">Rounded corners</option>
										</select>
									</li>
									<li>
										 Layout
										<select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
											<option value="boxed" selected="selected">Boxed</option>
											<option value="fluid">Fluid</option>
										</select>
									</li>
									<li>
										 Top Menu Style
										<select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body" data-placement="left">
											<option value="dark" selected="selected">Dark</option>
											<option value="light">Light</option>
										</select>
									</li>
									<li>
										 Top Menu Mode
										<select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
											<option value="fixed">Fixed</option>
											<option value="not-fixed" selected="selected">Not Fixed</option>
										</select>
									</li>
									<li>
										 Mega Menu Style
										<select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body" data-placement="left">
											<option value="dark" selected="selected">Dark</option>
											<option value="light">Light</option>
										</select>
									</li>
									<li>
										 Mega Menu Mode
										<select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body" data-placement="left">
											<option value="fixed" selected="selected">Fixed</option>
											<option value="not-fixed">Not Fixed</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->

			@include('newtimeline/elements/breadcrumb')

			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">

			 <a class="btn btn-small btn-success pull-right" href="{{ URL::to('posts/create') }}">Create a New Post</a>

				<div class="portlet-body">
					<div class="timeline">
						<!-- TIMELINE ITEM -->
					 @foreach($posts as $key => $value)
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/12.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">{{$value->title}}</a>
										<span class="timeline-body-time font-grey-cascade">Published On {{$value->published_at}}</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group">
											<button class="btn btn-circle green-haze btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="{{ URL::to('posts/'.$value->id) }}">Show Post </a>
												</li>
												<li>
													<a href="{{ URL::to('posts/'.$value->id.'/edit/') }}">Edit Post </a>
												</li>

												<li class="divider">
                                                </li>

												<li>
													{!! Form::open(array('method'=> 'DELETE', 'route' => array('posts.destroy', $value->id))) !!}
                                                    {!! Form::submit('Delete', array('class'=> 'btn btn-square alert alert-danger')) !!}
                                                    {!! Form::close() !!}
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									{{$value->body}}
									</span>
								</div>
							</div>
						</div>
						@endforeach
						<!-- END TIMELINE ITEM -->


						<!-- TIMELINE ITEM -->


						<div class="timeline-item">
                        							<div class="timeline-badge">
                        								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_2.jpg">
                        							</div>
                        							<div class="timeline-body">
                        								<div class="timeline-body-arrow">
                        								</div>
                        								<div class="timeline-body-head">
                        									<div class="timeline-body-head-caption">
                        										<a href="#" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                        										<span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                        									</div>
                        									<div class="timeline-body-head-actions">
                        									</div>
                        								</div>
                        								<div class="timeline-body-content">
                        									<span class="font-grey-cascade">
                        									<p>
                        										<img class="timeline-body-img pull-right" src="../../assets/admin/pages/media/blog/4.jpg" alt="">
                        										Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard.
                        									</p>
                        									<p>
                        										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
                        									</p>
                        									<p>
                        										<img class="timeline-body-img pull-left" src="../../assets/admin/pages/media/blog/6.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
                        									</p>
                        									<p>
                        										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
                        									</p>
                        									</span>
                        								</div>
                        							</div>
                        						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM WITH GOOGLE MAP -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_3.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Carles Puyol</a>
										<span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group">
											<button class="btn btn-circle btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="timeline-body-content">
									<div id="gmap_polygons" class="gmaps">
									</div>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM WITH GOOGLE MAP -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<div class="timeline-icon">
									<i class="icon-user-following font-green-haze"></i>
								</div>
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<span class="timeline-body-alerttitle font-red-intense">You have new follower</span>
										<span class="timeline-body-time font-grey-cascade">at 11:00 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group">
											<button class="btn btn-circle grey-salsa btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									You have new follower <a href="#">Ivan Rakitic</a>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_1.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
										<span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
									</div>
									<div class="timeline-body-head-actions">
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic img-circle" src="../../assets/admin/pages/media/users/avatar80_2.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
										<span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
									</div>
									<div class="timeline-body-head-actions">
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									<p>
										<img class="timeline-body-img pull-right" src="../../assets/admin/pages/media/blog/4.jpg" alt="">
										Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard.
									</p>
									<p>
										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
									</p>
									<p>
										<img class="timeline-body-img pull-left" src="../../assets/admin/pages/media/blog/6.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
									</p>
									<p>
										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
									</p>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<div class="timeline-icon">
									<i class="icon-docs font-red-intense"></i>
								</div>
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<span class="timeline-body-alerttitle font-green-haze">Server Report</span>
										<span class="timeline-body-time font-grey-cascade">Yesterday at 11:00 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group dropup">
											<button class="btn btn-circle green-haze btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									Lorem ipsum dolore sit amet <a href="#">Ispect</a>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->



@endsection
