<?php include 'includes/global/_header.php'; ?>
<?php include 'includes/global/breadcrumb.php'; ?>

<section class="Sepet">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <thead>
                        <tr>
                            <td>Ürün</td>
                            <td>Fiyat</td>
                            <td>Adet</td>
                            <td>Toplam</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button type="button"><i class="fa fa-times-circle"></i></button>
                                Ürün Adı Buraya Gelicek
                            </td>
                            <td>55 ₺</td>
                            <td><input type="number" min="1" step="1" value="1"></td>
                            <td>55 ₺</td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button"><i class="fa fa-times-circle"></i></button>
                                Ürün Adı Buraya Gelicek
                            </td>
                            <td>55 ₺</td>
                            <td><input type="number" min="1" step="1" value="1"></td>
                            <td>55 ₺</td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button"><i class="fa fa-times-circle"></i></button>
                                Ürün Adı Buraya Gelicek
                            </td>
                            <td>55 ₺</td>
                            <td><input type="number" min="1" step="1" value="1"></td>
                            <td>55 ₺</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 ml-auto mt-5">
                <table>
                    <thead>
                        <tr>
                            <td>Sepet Toplamları</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ara Toplam</td>
                            <td>110.00 ₺</td>
                        </tr>
                        <tr>
                            <td>KDV 18%</td>
                            <td>20.00 ₺</td>
                        </tr>
                        <tr>
                            <td>Toplam Tutar</td>
                            <td>130.00 ₺</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row form-row">
            <div class="col">
                <form action="">
                    <p class="subtitle">Sipariş Bilgileri</p>
                    <input type="text" name="name" placeholder="Ad Soyad / Unvan*" required>
                    <input type="tel" name="tel" placeholder="Telefon Numaranız*" required>
                    <input type="email" name="email" placeholder="Email Adresiniz*" required>
                    <textarea name="adres" rows="8" placeholder="Adresiniz*" required></textarea>
                    <textarea name="note" rows="4" placeholder="Not"></textarea>
                    <select name="tax_type" class="form-control" required> <option value="">--Fatura Tipi Seçiniz--</option> <option value="1">Bireysel</option> <option value="2">Kurumsal</option> </select>
                    <div class="personal-area" style="display: none;"> <div class="form-group"> <input type="text" pattern="[0-9]{11}" class="form-control number-limit" data-limit="11" name="tc" placeholder="Tc Kimlik No" minlength="11" maxlength="11"> </div> </div>
                    <div class="firm-area" style="display: none;"> <div class="form-group"> <input type="text" class="form-control" name="vd" placeholder="Vergi Dairesi" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="vn" placeholder="Vergi No" minlength="10" maxlength="10" required="required"> </div> </div>
                    <div class="sozlesme">
                        <input type="checkbox" required name="sozlesme" id="sozlesme">
                        <label for="sozlesme"><a href="sabit-sayfa.php">Sözleşmeyi okudum ve kabul ediyorum.</a></label>
                    </div>
                    <button type="submit">Ödeme adımına geç</button>
                </form>
            </div>
        </div>
    </div>
</section>









<?php include 'includes/global/_footer.php'; ?>