<?php include 'includes/global/_header.php'; ?>
<?php include 'includes/global/breadcrumb.php'; ?>



<section class="Urun-detay">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="owl-carousel urun-owl">
                    <div class="urun-foto">
                        <a href="images/product4.jpg" data-lightbox="urun" data-title="urun baslik" title="urun"><img src="images/product4.jpg" alt="urun"></a>
                    </div>
                    <div class="urun-foto">
                        <a href="images/product6.jpg" data-lightbox="urun" data-title="urun baslik" title="urun"><img src="images/product6.jpg" alt="urun"></a>
                    </div>
                    <div class="urun-foto">
                        <a href="images/product2.jpg" data-lightbox="urun" data-title="urun baslik" title="urun"><img src="images/product2.jpg" alt="urun"></a>
                    </div>
                    <div class="urun-foto">
                        <a href="images/product5.jpg" data-lightbox="urun" data-title="urun baslik" title="urun"><img src="images/product5.jpg" alt="urun"></a>
                    </div>
                    <div class="urun-foto">
                        <a href="images/product7.jpg" data-lightbox="urun" data-title="urun baslik" title="urun"><img src="images/product7.jpg" alt="urun"></a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 sepet-ekle">
                <div>
                    <p class="subtitle">Ürün Adı buraya yazılcak</p>
                    <p class="subtitle">100.00₺</p>
                </div>

                <form action="" class="urun-form">
                    <div class="form-select">
                        <label for="miktar">Miktar</label>
                        <select name="miktar" id="miktar" required>
                            <option value="1kg" selected>1 Kilogram</option>
                            <option value="1tepsi">1 Tepsi</option>
                        </select>
                    </div>
                    <div class="form-message">
                        <p>Fiyata Tepsi ve Kargo Bedeli Dahildir</p>
                        <span class="subtitle price">100.00</span>
                        <span class="subtitle">₺</span>
                        
                    </div>
                    <div class="form-submit">
                        <input type="number" min="1" step="1" value="1">
                        <button type="submit">Sepete Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="Urun-aciklama">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="button-container">
                    <button class="content-selector active">Ürün Bilgileri</button>
                    <button class="content-selector">İncelemeler</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 content show">
                <table>
                    <tbody>
                        <tr>
                            <th>Miktar</th>
                            <td>1 KG Paket, 2,5 KG Tepsi</td>
                        </tr>
                        <tr>
                            <th>Dayanma Süresi</th>
                            <td>Kış Aylarında 3 gün, Yaz Aylarında 2 gün</td>
                        </tr>
                        <tr>
                            <th>Tavsiye</th>
                            <td>Kışın alınan ürünü yemeden önce hafif ısıtınız</td>
                        </tr>
                        <tr>
                            <th>Saklama Koşulları</th>
                            <td>Serin ve rutubetsiz ortamda muhafaza ediniz</td>
                        </tr>
                        <tr>
                            <th>İçindekiler</th>
                            <td>Un, Su, Yumurta, Nişasta, Şeker, Fıstık, Sadeyağ</td>
                        </tr>
                        <tr>
                            <th>Minimum Kargo Miktarı</th>
                            <td>1 KG</td>
                        </tr>
                        <tr>
                            <th>Kargo Bilgisi</th>
                            <td>İstanbul içi ertesi gün, İstanbul dışı 1-3 günde teslim edilir</td>
                        </tr>
                        <tr>
                            <th>Katkı Maddesi</th>
                            <td>Hiç Bir Koruyucu ve Katkı Maddesi İçermez</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 content">
                <p class="subtitle">İncelemeler</p>
                <div class="owl-carousel yorum-owl">
                    <div class="card">
                        <img src="images/user.jpg" alt="kullanıcı" class="card-photo img-fluid">
                        <div class="card-body">
                            <p class="subtitle">Necmi Akın Evrenkaya</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ducimus nam accusantium modi aspernatur? Perferendis facilis omnis, commodi error, officia beatae, sint hic reiciendis possimus earum dolores. Non commodi repellendus mollitia sed cum natus quia id dolore distinctio! Beatae, doloremque? Nostrum ullam perspiciatis aut. Explicabo a rem, cumque dignissimos, officia voluptatibus repellat perferendis praesentium perspiciatis dolore iure ipsam doloremque facere dolores! Impedit odit, possimus expedita aliquam tenetur placeat? Velit cum officia soluta, fugit optio ut at, nobis nesciunt doloremque numquam exercitationem deserunt possimus cupiditate praesentium delectus eligendi necessitatibus iure nostrum fuga alias maiores enim vel cumque minus! Expedita, mollitia enim!</p>
                            <p>09.05.2002 6.43</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/user.jpg" alt="kullanıcı" class="card-photo img-fluid">
                        <div class="card-body">
                            <p class="subtitle">Necmi Akın Evrenkaya</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ducimus nam accusantium modi aspernatur? Perferendis facilis omnis, commodi error, officia beatae, sint hic reiciendis possimus earum dolores. Non commodi repellendus mollitia sed cum natus quia id dolore distinctio! Beatae, doloremque? Nostrum ullam perspiciatis aut. Explicabo a rem, cumque dignissimos, officia voluptatibus repellat perferendis praesentium perspiciatis dolore iure ipsam doloremque facere dolores! Impedit odit, possimus expedita aliquam tenetur placeat? Velit cum officia soluta, fugit optio ut at, nobis nesciunt doloremque numquam exercitationem deserunt possimus cupiditate praesentium delectus eligendi necessitatibus iure nostrum fuga alias maiores enim vel cumque minus! Expedita, mollitia enim!</p>
                            <p>09.05.2002 6.43</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Urun-benzer">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="subtitle">Benzer Ürünler</p>
                <div class="owl-carousel benzer-owl">
                <div class="card">
                    <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link-img"><img src="images/product3.jpg" alt="Fıstıklı Baklava" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link"><p class="card-subtitle">Fıstıklı Baklava</p></a>
                    </div>
                    <p class="card-price">177 ₺</p>
                </div>
                <div class="card">
                    <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link-img"><img src="images/product5.jpg" alt="Fıstıklı Baklava" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link"><p class="card-subtitle">Fıstıklı Baklava</p></a>
                    </div>
                    <p class="card-price">177 ₺</p>
                </div>
                <div class="card">
                    <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link-img"><img src="images/product8.jpg" alt="Fıstıklı Baklava" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link"><p class="card-subtitle">Fıstıklı Baklava</p></a>
                    </div>
                    <p class="card-price">177 ₺</p>
                </div>
                <div class="card">
                    <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link-img"><img src="images/product7.jpg" alt="Fıstıklı Baklava" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link"><p class="card-subtitle">Fıstıklı Baklava</p></a>
                    </div>
                    <p class="card-price">177 ₺</p>
                </div>
                <div class="card">
                    <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link-img"><img src="images/product2.jpg" alt="Fıstıklı Baklava" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <a href="urun-detay.php" title="Fıstıklı Baklava" class="card-link"><p class="card-subtitle">Fıstıklı Baklava</p></a>
                    </div>
                    <p class="card-price">177 ₺</p>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</section>







<?php include 'includes/global/_footer.php'; ?>