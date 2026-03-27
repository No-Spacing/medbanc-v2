<!-- resources/views/components/cookie-consent.blade.php -->

<!-- Overlay background -->
<div id="cookie-consent-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<!-- Cookie consent banner -->
<div id="cookie-consent" class="fixed bottom-0 left-0 w-full bg-gray-900 bg-opacity-95 text-white p-6 shadow-lg z-50 md:max-w-full mx-auto rounded-none md:rounded-lg">
    <div class="text-sm md:text-base">
        <p><strong>Our Use of Cookies</strong></p>
        <p>
            Medbanc and our partners use first and third-party cookies to collect data for the proper functioning of the website and to perform a statistical analysis of the use of the service, to enhance functionality and personalization of the website. These cookies may also be used by our advertising partners to build a profile of your interests and show you relevant adverts on other sites. If you do not consent to cookies, we will only use essential Strictly Necessary Cookies but will not be able to provide you with personalised content.
        </p>
        <!-- <p>
            You can withdraw your consent or update your preferences at any time by clicking on "Cookie Settings" at the bottom of any page of our Website.
            For more information, please read our: <a href="#" class="underline text-blue-600">Cookies Policy</a>.
        </p> -->
    </div>
    <div class="mt-4 flex justify-end space-x-4">
        <button onclick="declineCookies()" class="bg-gray-200 hover:bg-AColor-Logo-Green hover:text-white text-gray-800 px-4 py-2 rounded">Decline All</button>
        <button onclick="acceptCookies()" class="bg-Color-Logo-Green hover:bg-AColor-Logo-Green hover:text-white text-gray-950 px-4 py-2 rounded">Accept All</button>
    </div>
</div>
