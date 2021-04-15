<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="http://g2xtrading.com/" target="_blank">{{ __('g2xtrading') }}</a>
                    </li>
                    <li>
                        <a href="https://www.aureliotrader.com.br/" target="_blank">{{ __('Cursos') }}</a>
                    </li>
                    <li>
                        <a href="https://www.aureliotrader.com.br/" target="_blank">{{ __('Sobre') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made with ') }}<i class="fa fa-money"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" target="_blank" href="https://g2xtrading.com">{{ __('g2xtrading') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>
