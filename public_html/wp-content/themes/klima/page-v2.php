<?php /* Template Name: V2 */ ?>
<?php
get_template_part("header-v2");
?>
<div id="kn_contact-modal" class="kn_contact-modal">
    <div class="kn_contact-content kn-container">
        <span class="kn_close">&times;</span>
        <h3 class="kn-border-bottom kn-border-light-grey kn-padding-16">Skontaktuj się z nami</h3>
        <p>Z chęcią odpowiemy na Twoje pytania.</p>
        <?= do_shortcode('[contact-form-7 id="54" title="Formularz 1"]'); ?>
    </div>
</div>

<main id="site-content" role="main" class="kn-content kn-padding">
    <!-- About Section -->
    <div class="kn-container kn-padding-32" id="kn_section_about">
        <h3 class="kn-border-bottom kn-border-light-grey kn-padding-16">O Firmie</h3>
        <div class="kn-row-padding">
            <p><b>KLIMAR-AGD</b> Maciej Włosiniak oferuje montaż klimatyzacji w systemach Split oraz Multi Split.</p>
            <p>Systemy nadają się do różnego rodzaju pomieszczeń, w tym zabudowy mieszkalnej.</p>
            </br>
            <p>Podczas każdej instalacji dbamy o czystość pomieszczeń.</p>
            <p>Wybieramy miejsce instalacji jednostki wewnętrznej i zewnętrznej tak aby działała ona najbardziej efektywnie.</p>
            </br>
            <p>Przed każdym montażem pzeprowadzamy dokładna rozmowę z klienem, co pozwala nam na dobranie urządzenia do indywidualnych potrzeb.</p>
            <button id="kn_contact-button" class="kn-button kn-black kn-section" type="submit">Skontaktuj się z nami</button>
            <p>Montujemy klimatyzatory między innymi firmy LG, ROTENSO, AUX, TOSCHIBA, GREE i MDV.</p>
            <p>Stawiamy na jakość i trwałość oferowanych przez nas urządzeń oraz usług.</p>
            </br>
        </div>
    </div>

    <div class="kn-container kn-padding-32" id="kn_section_gallery">
        <h3 class="kn-border-bottom kn-border-light-grey kn-padding-16">Galeria</h3>
        <div class="kn-row-padding">
            <?php
            $gallery = get_field('galeria');
            $i = 0;
            foreach ($gallery as $image) : $i++;
                $content = '<div class="kn-col l3 m6 kn-margin-bottom">';
                $content .= '<div class="kn-display-container">';
                $content .= '<div class="kn-display-bottomleft kn-black kn-padding">' . $image['title'] . '</div>';
                $content .= '<a class="kn_lightbox" rel="lightbox" href="' . $image['url'] . '">';
                $content .= '<img class="kn_lightbox" src="' . $image['url'] . '" alt="' . $image['alt'] . '" style="width:100%">';
                $content .= '</a>';
                $content .= '</div>';
                $content .= '</div>';
                echo $content; ?>
                <?php if ($i == 4) : ?>
        </div>
        <div class="kn-row-padding">
        <?php endif; ?>
    <?php endforeach; ?>
        </div>
    </div>

    <div class="kn-container kn-padding-32" id="kn_section_contact">
        <h3 class="kn-border-bottom kn-border-light-grey kn-padding-16">Kontakt</h3>
        <div class="kn-row-padding kn-grayscale">
            <div class="kn-col 6 m6 kn-margin-bottom">
                <h3>Telefon</h3>
                <a href="tel:659 915 790"><u>659 915 790</u></a>
                <h3>E-mail</h3>
                <a href="mailto:klimar1978@tlen.pl"><u>klimar1978@tlen.pl</u></a>
                <h3>Adres</h3>
                <a href="https://www.google.pl/maps/place/Klimar-AGD+Maciej+Włosiniak+Montaż+i+serwis+klimatyzacji/@52.1693429,17.9075908,17z/data=!3m1!4b1!4m5!3m4!1s0x4704d1bca0d1f8ef:0xd70be2359b5741cb!8m2!3d52.1693396!4d17.9097795" target="_blank"><u>Dojazdowa 13, 62-410 Zagórów</u></a>
            </div>
            <div class="kn-col 6 m6 kn-margin-bottom">
                <h3>Godziny pracy</h3>
                <p><b>Poniedziałek</b> 8:00-18:00</p>
                <p><b>Wtorek</b> 8:00-18:00</p>
                <p><b>Środa</b> 8:00-18:00</p>
                <p><b>Czwartek</b> 8:00-18:00</p>
                <p><b>Piątek</b> 8:00-18:00</p>
                <p><b>Sobota</b> 8:00-14:00</p>
                <p><b>Niedziela</b> Zamknięte</p>
            </div>
        </div>

    </div>
</main>
<?php
get_template_part("footer-v2");
