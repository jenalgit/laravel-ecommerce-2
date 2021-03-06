                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CD</td>
                                        <td>$7 ea.</td>
                                        <td>
                                            @if ( strtotime(date('Y-m-d')) <= strtotime(Config::get('workshop.last_free_cd_discount_date')) )
                                            Get one <span class="text-primary"><strong>free</free> CD for every
                                                    <em>five</em> purchased.  (No limit!)</span><br />
                                            @endif
                                            <strong>Free</strong> custom case,
                                            if you buy 6 or more <em>2015</em> sesssion CDs!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DVD</td>
                                        <td>$12 ea.</td>
                                        <td>Delivered in custom case.  <span class="text-warning">(Available by mail only.)</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CD Set</strong></td>
                                        <td>$350 ea.</td>
                                        <td>CD recordings of <strong>all 78</strong>
                                            sessions in custom cases.  <strong>That's an over 35% discount compared to purchasing CDs individually.</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>DVD Set</strong></td>
                                        <td>$72 ea.</td>
                                        <td>All 7 DVD sessions for the price of 6
                                            in a custom case.  <span class="text-warning">(Available by mail only.)</span>
                                        </td>                                      
                                    </tr>
                                    <tr>
                                        <td><strong>MP3 Set</strong></td>
                                        <td>$225 ea.</td>
                                        <td>Recordings of <strong>all 78</strong>
                                            sessions in MP3 format (Apple iPod/iPhone 
                                            and Android compatible) on 4GB custom USB flash drive. 
                                            <span class="text-warning">(Available by mail only.)</span>
                                        </td>                                      
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>