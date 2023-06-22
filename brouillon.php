<div class="contenu">


    <form action="" method="post">
              
            <div class="row">
                <div class="col-md-4">
                    <div class="former-groupe">
                        <label>No Fiche</label>
                        <input type="text" name="offense_Fiche" class="form-controle" placeholder="No fiche">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="former-groupe">
                        <label>Plaque vehicule.</label>
                        <input type="text" name="vehicule_no" class="form-controle" placeholder="Plaque vehicule" >
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="former-groupe">
                        <label for="exampleInputEmail1">No dossier</label>
                        <input type="text" name="No_dossier"  class="form-controle" placeholder="No dossier">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="former-groupe">
                        <label>Nom du Conducteur</label>
                        <input type="text" name="name" class="form-controle" placeholder="Nom du conducteur">
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="former-groupe">
                        <label> Prenom Conducteur</label>
                        <input type="text" name="name" class="form-controle" placeholder="Nom du conducteur">
                    </div>
                </div>
                </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="former-groupe">
                        <label>Addresse</label>
                        <input type="text" name="address"  class="form-controle" placeholder="Address of Incident" >
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-6">
                    <div class="former-group">
                        <label>Sexe</label>
                            <select class="form-controle" name="sexe" >
                                 <option value="Male">Masculin</option>
                                <option value="Female">Feminin</option>
                            </select> 
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Code agent</label>
                        <input type="text" name="officer_reporting"  class="form-control" placeholder="Officer Name" value="">
                    </div>       
               </div>


               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Offense</label>
                                <select class="form-control" name="offence" >
                                <option selected disabled>..Choose Offense Type..</option>
                                                <option value="Attempting to corrupt Marshall on duty">Attempting to corrupt Marshall on duty</option>
                                            <option value="Drinking & Driving">Drinking & Driving</option>
                                            <option value="Assaulting Road Marshall">Assaulting Road Marshall</option>
                                            <option value="Dangerous Driving">Dangerous Driving</option>
                                            <option value="Driver's License Violation">Driver's License Violation</option>
                                            <option value="Do not move violation">Do not move violation</option>
                                            <option value="Driving Under Drug Influence">Driving Under Drug Influence</option>
                                            <option value="Driving with worn out tyres">Driving with worn out tyres</option>
                                            <option value="Constantly caught for No seatbelt">Constantly caught for No seatbelt</option>
                                            <option value="Excessive smoke emission">Excessive smoke emission</option>
                                            <option value="Failure to fix red flag on projected load">Failure to fix red flag on projected load</option>
                                            <option value="Fire extinguisher violation">Fire extinguisher violation</option>
                                            <option value="No Caution">No Caution</option>
                                            <option value="Holding with forged documents">Holding with forged documents</option>
                                            <option value="Riding Motorcycle without crash helmet">Riding Motorcycle without crash helmet</option>
                                            <option value="Road obstruction">Road obstruction</option>
                                            <option value="Speed Limit violation">Speed Limit violation</option>
                                            <option value="Under age driving">Under age driving</option>
                                            <option value="Making calls while driving">Making calls while driving</option>
                                            <option value="Other offences and violation">Other offences and violation</option>
                                </select>
                           </select>                                                 
								</div>
                        </div>
                        </div>


                        <button type="submit" class="btn btn-info btn-fill pull-right">Report Offence</button>
                        <div class="clearfix"></div>        
          </form>
</div>
  