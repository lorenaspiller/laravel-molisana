<footer>
    <div class="container">
        <div class="footer-wrapper">

            <div class="footer-left">
                <div class="footer-logo">
                    <img src="{{ asset('img/marchio-sito-test.png') }}" alt="Logo La Molisana">
                </div>
                <div class="legal">
                    <p>Ragione sociale: La Molisana S.P.A.</p>
                    <p>Sede legale: Contrada Colle delle Api, 100/A</p>
                    <p>86100 - Campobasso (CB)</p>
                    <p>Pec: lamolisana@pec.it</p>
                    <p>tel: +39 0874 4981</p>
                    <p>Fax: +39 0874 629584</p>
                    <p>info@lamolisana.it (per segnalazioni utenti)</p>
                    <p>commerciale@lamolisana.it</p>
                    <p>export@lamolisana.it</p>
                    <p>numero verde 800818081</p>
                    <p>telefono 3801292455</p>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-right-wrapper">
                    @foreach ($links as $key => $link)
                    <ul class="link-list no-style">
                        <li><h3 class="link-title uppercase">{{ $key }}</h3></li>
                        @foreach ($link as $item)
                        <li><a class="footer-link" href="#">{{$item}}</a></li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
 
            </div>

        </div>
    </div>
</footer>