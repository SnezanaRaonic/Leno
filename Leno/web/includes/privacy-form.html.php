<div class="form-container">
                                <form id="privacyForm" data-toggle="validator" data-focus="false">
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="pname" required>
                                        <label class="label-control" for="pname">Name</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control-input" id="pemail" required>
                                        <label class="label-control" for="pemail">Email</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control-select" id="pselect" required>
                                            <option class="select-option" value="" disabled selected>Select Option</option>
                                            <option class="select-option" value="Delete data">Delete my data</option>
                                            <option class="select-option" value="Show me data">Show me my data</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="pterms" value="Agreed-to-Terms" required>I have read and agree to Leno's <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button">SUBMIT</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </form>
                            </div>