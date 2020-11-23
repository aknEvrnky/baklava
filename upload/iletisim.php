<?php include 'includes/global/_header.php'; ?>
<?php include 'includes/global/breadcrumb.php'; ?>


<section class="iletisim">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="subtitle">İletişim Formu</p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Adınız</label>
                            <input type="text" name="name" id="name" placeholder="Adınız Soyadınız*" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Eposta</label>
                            <input type="email" id="email" name="email" placeholder="Eposta Adresiniz*" required>
                        </div>
                        <div class="col-md-6">
                            <label for="tel">Telefon Numaranız</label>
                            <input type="tel" name="tel" id="tel" placeholder="Telefon Numaranız*" required>
                        </div>
                        <div class="col-md-6">
                            <label for="konu">Konu</label>
                            <input type="text" id="konu" name="subject" placeholder="Konu*" required>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Mesajınız</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mesajınızı Yazınız."></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 iletisim-info">
                <div class="row">
                    <div class="col-md-12 iletisim-cont">
                        <div>
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <p>Tahtakale Mah, Bizimevler Mevki, 34325 Firuzköy, Avcılar/Avcılar/İstanbul</p>
                    </div>
                    <div class="col-md-6 iletisim-cont">
                        <div>
                            <i class="fas fa-phone-alt fa-2x"></i>
                        </div>
                        <a href="tel:05061197004">05061197004</a>
                    </div>
                    <div class="col-md-6 iletisim-cont">
                        <div>
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <a href="mailto:info@domain.com">info@domain.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6016.665567585446!2d28.711810998326335!3d41.061717871860964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53cffe3fbb77e29!2sPatara%20Sitesi!5e0!3m2!1str!2str!4v1604756788811!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>






<?php include 'includes/global/_footer.php'; ?>
