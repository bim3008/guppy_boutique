@php 
    // echo '<pre>';
    // print_r($item);
    // echo '</pre>';
@endphp
<div class="tab-content">
    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
        <div class="product-desc-content">
            {!! $item['content']!!}
        </div><!-- End .product-desc-content -->
    </div><!-- End .tab-pane -->

    {{-- <div class="tab-pane fade show active" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
        <div class="product-size-content">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/products/single/body-shape.png" alt="body shape">
                </div><!-- End .col-md-4 -->

                <div class="col-md-8">
                    <table class="table table-size">
                        <thead>
                            <tr>
                                <th>SIZE</th>
                                <th>CHEST (in.)</th>
                                <th>WAIST (in.)</th>
                                <th>HIPS (in.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>XS</td>
                                <td>34-36</td>
                                <td>27-29</td>
                                <td>34.5-36.5</td>
                            </tr>
                            <tr>
                                <td>S</td>
                                <td>36-38</td>
                                <td>29-31</td>
                                <td>36.5-38.5</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>38-40</td>
                                <td>31-33</td>
                                <td>38.5-40.5</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>40-42</td>
                                <td>33-36</td>
                                <td>40.5-43.5</td>
                            </tr>
                            <tr>
                                <td>XL</td>
                                <td>42-45</td>
                                <td>36-40</td>
                                <td>43.5-47.5</td>
                            </tr>
                            <tr>
                                <td>XLL</td>
                                <td>45-48</td>
                                <td>40-44</td>
                                <td>47.5-51.5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- End .row -->
        </div><!-- End .product-size-content -->
    </div><!-- End .tab-pane --> --}}

    <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
        <div class="product-tags-content">
            <form action="#">
                <h4>Add Your Tags:</h4>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" required>
                    <input type="submit" class="btn btn-primary" value="Add Tags">
                </div><!-- End .form-group -->
            </form>
            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
        </div><!-- End .product-tags-content -->
    </div><!-- End .tab-pane -->

    <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
        <div class="product-reviews-content">
            <div class="collateral-box">
                <ul>
                    <li>Be the first to review this product</li>
                </ul>
            </div><!-- End .collateral-box -->

            <div class="add-product-review">
                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                <p>How do you rate this product? *</p>

                <form action="#">
                    <table class="ratings-table">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>1 star</th>
                                <th>2 stars</th>
                                <th>3 stars</th>
                                <th>4 stars</th>
                                <th>5 stars</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Quality</td>
                                <td>
                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                </td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td>
                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>
                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                </td>
                                <td>
                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="form-group">
                        <label>Nickname <span class="required">*</span></label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->
                    <div class="form-group">
                        <label>Summary of Your Review <span class="required">*</span></label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->
                    <div class="form-group mb-2">
                        <label>Review <span class="required">*</span></label>
                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                    </div><!-- End .form-group -->

                    <input type="submit" class="btn btn-primary" value="Submit Review">
                </form>
            </div><!-- End .add-product-review -->
        </div><!-- End .product-reviews-content -->
    </div><!-- End .tab-pane -->
</div><!-- End .tab-content -->