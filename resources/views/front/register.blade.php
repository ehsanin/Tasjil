@include('front.header')

<!-- Page container -->
<div class="page-container">


  <!-- Main container -->
  <div class="main-container">
  

	<!-- Main content -->
	<div class="main-content">
		<h1 class="page-title">فرم ساده</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i> خانه</a></li> 
			<li><a href="form-basic.html"> فرم ها</a></li> 
			<li class="active"><strong> فرم ساده</strong></li> 
		</ol>
		<div class="row">
			<div class="col-lg-6 animatedParent animateOnce z-index-50">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading clearfix">
						<h3 class="panel-title"> فرم ساده</h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form>
							  <div class="form-group">
								<label for="emailaddress">Email address</label>
								<input type="email" class="form-control" id="emailaddress" placeholder="Email">
							  </div>
							  <div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							  </div>
							  <div class="checkbox">
								<label><input type="checkbox">Check me out</label>
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-6 animatedParent animateOnce z-index-49">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">فرم افقی</h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal"> 
						 	<div class="form-group"> 
								<label class="col-sm-2 control-label" for="inputEmail3">Email</label> 
								<div class="col-sm-10"> 
									<input type="email" placeholder="Email" id="inputEmail3" class="form-control">
									<p class="help-block">Example block-level help text here.</p>
								 </div> 
							</div> 
							<div class="form-group"> 
								 <label class="col-sm-2 control-label" for="inputPassword3">Password</label> 
								 <div class="col-sm-10"> 
								   <input type="password" placeholder="Password" id="inputPassword3" class="form-control"> 
								 </div> 
							</div> 
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<div class="checkbox">
										 <label> <input type="checkbox"> Remember me </label> 
									</div> 
								</div> 
							</div> 
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<button class="btn btn-primary" type="submit">Sign in</button> 
								</div> 
							</div> 
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 animatedParent animateOnce z-index-48">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">فرم خطی</h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-inline">
							  <div class="form-group">
								<input type="email" class="form-control" id="exampleInputName2" placeholder="Email">
							  </div>
							  <div class="form-group">
								<input  type="password" placeholder="Password" id="inputPassword2" class="form-control">
							  </div>
							  <button type="submit" class="btn btn-primary">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 animatedParent animateOnce z-index-47">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading clearfix">
						<h3 class="panel-title"> پیش فرض form Elements</h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal">
						 	<div class="form-group"> 
								<label class="col-sm-2 control-label">Normal</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control"> 
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Help text</label>
                                <div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Placeholder"> 
									<span class="help-block m-b-none">Example block-level help text here.</span>
                                </div>
                             </div>
							 <div class="line-dashed"></div>
							 <div class="form-group">
								<label class="col-sm-2 control-label">Disabled</label>
                                <div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Placeholder" disabled> 
                                </div>
                             </div>
							 <div class="line-dashed"></div>
							 <div class="form-group">
								<label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
									<input type="password" class="form-control" placeholder="Password"> 
                                </div>
                             </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
							 	<label class="col-sm-2 control-label">Textarea</label> 
								<div class="col-sm-10"> 
									<textarea placeholder="Textarea" class="form-control"></textarea> 
								</div> 
							</div>
							 <div class="line-dashed"></div>
							 <div class="form-group has-error"> 
							 	<label class="col-sm-2 control-label">Error field</label> 
								<div class="col-sm-10"> 
									<input type="text" class="form-control" placeholder="Placeholder"> 
								</div> 
							</div>
							 <div class="line-dashed"></div>
							 <div class="form-group has-warning"> 
							 	<label class="col-sm-2 control-label"> هشدار field</label> 
								<div class="col-sm-10"> 
									<input type="text" class="form-control" placeholder="Placeholder"> 
								</div> 
							</div>
							 <div class="line-dashed"></div>
							 <div class="form-group has-success"> 
							 	<label class="col-sm-2 control-label"> موفقیت آمیز field</label> 
								<div class="col-sm-10"> 
									<input type="text" class="form-control" placeholder="Placeholder"> 
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
							 	<label class="col-sm-2 control-label">Select List</label> 
								<div class="col-sm-10"> 
									<select class="form-control"> 
										<option>Option 1</option> 
										<option>Option 2</option>
										<option>Option 3</option> 
										<option>Option 4</option> 
										<option>Option 5</option> 
									</select>
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
							 	<label class="col-sm-2 control-label">File Field</label> 
								<div class="col-sm-10"> 
									<input type="file"  id="field-file" class="form-control field-file">
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Inline checkboxes</label>
								<div class="col-sm-10">
									<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> A </label> 
									<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> B </label> 
									<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> C </label>
								</div>
                            </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<div class="checkbox"> <label> <input type="checkbox">Checkbox 1</label> </div> 
								 	<div class="checkbox"> <label> <input type="checkbox">Checkbox 2</label> </div>
								 </div>
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<div class="radio"> <label> <input type="radio" value="option1" id="optionsradios1" name="optionsradios">Radio Input 1</label> </div> 
								 	<div class="radio"> <label> <input type="radio" value="option2" id="optionsradios2" name="optionsradios">Radio Input 2</label> </div>
								 </div>
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<button class="btn btn-default" type="submit">Button</button> 
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 animatedParent animateOnce z-index-46">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">Control sizing</h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">	
						 <form class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Large</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control input-lg"> 
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Normal</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control"> 
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Small</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control input-sm"> 
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">Column sizing</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="col-md-2"><div class="form-group-inner"><input type="text" class="form-control" placeholder=".col-md-2"></div></div>
										<div class="col-md-3"><div class="form-group-inner"><input type="text" class="form-control" placeholder=".col-md-3"></div></div>
										<div class="col-md-4"><div class="form-group-inner"><input type="text" class="form-control" placeholder=".col-md-4"></div></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 animatedParent animateOnce z-index-45">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">Input Groups &amp; Addons </h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">	
						 <form class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Left addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon">@</span> 
										<input type="text" placeholder="Username" class="form-control"> 
									</div>
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Right addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<input type="text" class="form-control"> 
										<span class="input-group-addon">.00</span>
									</div>
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Both addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon">$</span>
										<input type="text"  class="form-control"> 
										<span class="input-group-addon">.00</span>
									</div>
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Icon addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon"><i class="icon-mail"></i></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">Input addons</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon"><input type="checkbox"></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<span class="input-group-addon"><input type="radio"></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label"> دکمه ها addons</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<input type="text"  class="form-control"> 
										<span class="input-group-btn"><button class="btn btn-success" type="button">Go!</button></span>
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">With dropdowns</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<div class="input-group-btn">
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<input type="text"  class="form-control"> 
										<div class="input-group-btn">
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">Segmented</label> 
								<div class="col-sm-10">
									<div class="input-group"> 
										<div class="input-group-btn">
											<button type="button" class="btn btn-white" tabindex="-1">Action</button>
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<input type="text"  class="form-control">
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<input type="text"  class="form-control">
										<div class="input-group-btn">
											<button type="button" class="btn btn-white" tabindex="-1">Action</button>
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<button type="submit" class="btn btn-white">Cancel</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer class="animatedParent animateOnce z-index-10"> 
			<div class="footer-main animated fadeInUp slow">&copy; 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> </div>
		</footer>	
		<!-- /footer -->
		
	  </div>
	  <!-- /main content -->

  
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

@include('front.footer')