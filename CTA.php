<style>
.wg-cta-shortcode {
	display: grid;
	grid-template-columns: repeat(3,1fr);
	margin: 30px 0;
	gap: 20px;
}
.wg-cta-shortcode__col {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background: #fff;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	gap: 6px;
	padding: 20px;
	border-radius: 6px;
}
.wg-cta-shortcode__icon {
	max-width: 40px;
	max-height: 60px;
	margin-bottom: 15px;
}
.wg-cta-shortcode__icon svg {
	max-width: 40px;
	width: 100%;
}
.wg-cta-shortcode__button {
	display: inline-block;
	background: #000;
	padding: 8px 20px;
	min-width: 140px;
	text-align: center;
	color: #fff;
	border-radius: 4px;
	font-size: 16px;
}

.wg-cta-shortcode__col.wg_cta_form svg {
	fill: #002e5b;
}
.wg-cta-shortcode__col.wg_cta_call svg {
	fill: #07a2bf;
}
.wg-cta-shortcode__col.wg_cta_wa svg {
	fill: green;
}
.wg-cta-shortcode__col.wg_cta_form .wg-cta-shortcode__button  {
	background: #002e5b;
	opacity: 0.9;
}
.wg-cta-shortcode__col.wg_cta_call .wg-cta-shortcode__button  {
	background: #07a2bf;
	opacity: 0.9;
}
.wg-cta-shortcode__col.wg_cta_wa .wg-cta-shortcode__button  {
	background: green;
	opacity: 0.9;
}
.wg-cta-shortcode__col .wg-cta-shortcode__button:hover {
	color: #fff;
	opacity: 1;
}

@media screen and (max-width: 600px){
.wg-cta-shortcode {
	grid-template-columns: repeat(1,1fr);
}
}
</style>

<?php

function wg_cta_shortcode() {
  $wgctacode = '<div class="wg-cta-shortcode">
    <div class="wg-cta-shortcode__col wg_cta_form">
        <div class="wg-cta-shortcode__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"/></svg></div>
        <div class="wg-cta-shortcode__title">Quick Enquiry</div>
        <a href="javascript: void(0)" class="wg-cta-shortcode__button wg-open-popup">Quick Enquiry</a>
    </div>
    <div class="wg-cta-shortcode__col wg_cta_call">
        <div class="wg-cta-shortcode__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"/></svg></div>
        <div class="wg-cta-shortcode__title">Make A Call</div>
        <a href="tel:+97145726421" class="wg-cta-shortcode__button">Call Us</a>
    </div>
    <div class="wg-cta-shortcode__col wg_cta_wa">
        <div class="wg-cta-shortcode__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></div>
        <div class="wg-cta-shortcode__title">Chat with us</div>
        <a href="https://api.whatsapp.com/send?phone=+971504807528&text=Hi%2C+Impruve+LLC+I+have+found+you+on+your+website+and+I+have+query." class="wg-cta-shortcode__button">Whatsapp Us</a>
    </div>
</div>';
  return $wgctacode;
}
add_shortcode('wg-cta', 'wg_cta_shortcode');

?>
