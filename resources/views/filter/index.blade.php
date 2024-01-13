<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="model-search-content">
                            <form action="{{ route('filtercar') }}" method="GET">
                                @csrf
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                                        <div class="single-model-search">
                                            <h2>Transmission</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="transmission">
													<option disabled selected>Pick Transmission</option><!-- /.option-->
                                                    <option value="automatic">Automatic</option><!-- /.option-->
                                                    <option value="manual">Manual</option><!-- /.option-->
                                                    <option value="hybrid">Hybrid</option><!-- /.option-->
                                                    
                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                        <div class="single-model-search">
                                            <h2>Fuel Type</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="fuel_type">
                                                    <option value="petrol">Petrol</option><!-- /.option-->
                                                    <option value="deisel">Deisel</option><!-- /.option-->
                                                    <option value="hybrid">Hybrid</option><!-- /.option-->
													<option value="electric">Electric</option><!-- /.option-->
                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                                        <div class="single-model-search">
                                            <h2>select make</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="make">

                                                    <option value="default">make</option><!-- /.option-->

                                                    <option value="toyota">toyota</option><!-- /.option-->

                                                    <option value="holden">holden</option><!-- /.option-->
                                                    <option value="maecedes-benz">maecedes-benz.</option><!-- /.option-->

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                        <div class="single-model-search">
                                            <h2>car condition</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="condition">

                                                    <option disabled selected>select Condition</option><!-- /.option-->
                                                    <option value="new">New</option><!-- /.option-->
                                                    <option value="used">Used</option><!-- /.option-->
                                                   

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                                        <div class="single-model-search">
                                            <h2>select model</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="model">
                                                    <option value="default">model</option><!-- /.option-->
                                                    <option value="kia-rio">kia-rio</option><!-- /.option-->
                                                    <option value="mitsubishi">mitsubishi</option><!-- /.option-->
                                                    <option value="ford">ford</option><!-- /.option-->

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                        <div class="single-model-search">
                                            <h2>Select Car Seats</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="seats">
                                                    <option value="default">2</option><!-- /.option-->
                                                    <option value="3">3</option><!-- /.option-->
                                                    <option value="4">4</option><!-- /.option-->
                                                    <option value="5">5</option><!-- /.option-->
													<option value="6">6</option><!-- /.option-->
													<option value="7">7</option><!-- /.option-->
													<option value="11">11</option><!-- /.option-->
													<option value="14">14</option><!-- /.option-->

                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="single-model-search text-center">
											<button type="submit" class="welcome-btn model-search-btn">
												Search
											</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>