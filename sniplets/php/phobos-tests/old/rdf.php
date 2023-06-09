<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

// Include modules
gfImportModules('aviary');

$installManifest = '<?xml version="1.0"?>

<!-- This Source Code Form is subject to the terms of the Mozilla Public
   - License, v. 2.0. If a copy of the MPL was not distributed with this
   - file, You can obtain one at http://mozilla.org/MPL/2.0/. -->

<RDF xmlns="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:em="http://www.mozilla.org/2004/em-rdf#">

  <Description about="urn:mozilla:install-manifest">
    <em:id>{d10d0bf8-f5b5-c8b4-a8b2-2b9879e08c5d}</em:id>
    <em:version>2.8.2</em:version>
    <em:name>Adblock Plus</em:name>
    <em:description>Ads were yesterday!</em:description>
    <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
    <em:homepageURL>http://adblockplus.org/</em:homepageURL>
    <em:type>2</em:type>
    <em:bootstrap>true</em:bootstrap>
    <em:multiprocessCompatible>true</em:multiprocessCompatible>
    <em:optionsURL>chrome://adblockplus/content/ui/settings.xul</em:optionsURL>
    <em:optionsType>2</em:optionsType>
    <em:localized>
      <Description
        em:locale="ar"
        em:name="آدبلوك بلس"
        em:description="الإعلانات أصبحت من الأمس!">
        <em:translator>Test</em:translator>
        <em:translator>test2</em:translator>
        </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>az</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Bezdirici reklamlara əlvida!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>FARIDEM</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>bg</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Рекламите са минало!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Николай Филипов</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>bn-BD</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>অ্যাডব্লক প্লাস</em:name>
        <em:description>বিজ্ঞাপনগুলি গতকালের ছিল!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>ভ্লাদিমির পালান্ট</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>ca</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Els anuncis eren ahir</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>BennyBeat</em:translator>
        <em:translator>CatTranslations</em:translator>
        <em:translator>el_libre</em:translator>
        <em:translator>Toni Barrera</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>cs</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>A reklamy jsou minulostí!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Jakub Tománek</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>cy</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Mae hysbysebion yn perthyn i&#39;r oes o&#39;r blaen!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Ciaran S</em:translator>
        <em:translator>Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>da</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklamer er fortid!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>AlleyKat</em:translator>
        <em:translator>Regmos</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>de</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Werbung war gestern!</em:description>
        <em:homepageURL>http://adblockplus.org/de/</em:homepageURL>
        <em:translator>Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>dsb</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Wabjenje jo cora było!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>milupo</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>el</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Αφήστε τις διαφημίσεις στο χθες!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>rookie</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>en-GB</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Ads were yesterday!</em:description>
        <em:homepageURL>http://adblockplus.org/en/</em:homepageURL>
        <em:translator>Mark Tyndall</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>en-US</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Ads were yesterday!</em:description>
        <em:homepageURL>http://adblockplus.org/en/</em:homepageURL>
        <em:translator>Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>en-ZA</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Ads were yesterday!</em:description>
        <em:homepageURL>http://adblockplus.org/en/</em:homepageURL>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>eo</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklamoj estis hieraŭ!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Wladimir PALANT</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>es-AR</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>¡La publicidad es cosa del pasado!</em:description>
        <em:homepageURL>http://adblockplus.org/es/</em:homepageURL>
        <em:translator>KNTRO</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>es-CL</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Los anuncios fueron ayer!</em:description>
        <em:homepageURL>http://adblockplus.org/es/</em:homepageURL>
        <em:translator>Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>es-ES</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>La publicidad es cosa del ayer</em:description>
        <em:homepageURL>http://adblockplus.org/es/</em:homepageURL>
        <em:translator>Urko</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>es-MX</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Los Anuncios son cosa del Ayer!</em:description>
        <em:homepageURL>http://adblockplus.org/es/</em:homepageURL>
        <em:translator>Francisco Alvarado</em:translator>
        <em:translator>Ninnetyer</em:translator>
        <em:translator>poz2k4444</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>et</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklaamid on nüüd eilne päev!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Aivo Kuhlberg</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>eu</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Iragarkiak atzoko kontuak dira!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Librezale.org</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>fa</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>تبلیغت متعلق به دیروز بود!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>از طرف Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>fi</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Mainokset ovat menneisyyttä!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>haavu</em:translator>
        <em:translator>Joni Heinonen</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>fr</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Les publicités, c&#39;est du passé !</em:description>
        <em:homepageURL>http://adblockplus.org/fr/</em:homepageURL>
        <em:translator>Dagobert_78</em:translator>
        <em:translator>Jim Courbron</em:translator>
        <em:translator>jojaba</em:translator>
        <em:translator>pirlouy</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>fy-NL</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Fan no ôf gjin reklames mear!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Wim Benes</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>gl</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>A publicidade é o que lle doe!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Jesús Olano</em:translator>
        <em:translator>Manuel Meixide</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>he</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>הפרסומות שייכות לעבר!</em:description>
        <em:homepageURL>http://adblockplus.org/he/</em:homepageURL>
        <em:translator>catcat</em:translator>
        <em:translator>SiiiE</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>hr</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklame su prošlost!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>gogo</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>hsb</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklama bě wčera!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Milupo</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>hu</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>A reklám a múlté!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Gárdonyi László</em:translator>
        <em:translator>Mikes Kaszmán István</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>hy-AM</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Գովազդները երեկ էին!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>iAbaS</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>id</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Iklan sudah menjadi masa lalu!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>RudzLong</em:translator>
        <em:translator>William Surya Permana</em:translator>
        <em:translator>Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>is</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Auglýsingar eru hluti af fortíðinni!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Kristján Bjarni Guðmundsson</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>it</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Permette di dire &#39;no&#39; alla pubblicità presente nelle pagine web!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Luana Di Muzio - BabelZilla</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>ja</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>広告は過去の遺物です！</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Haebaru</em:translator>
        <em:translator>k2jp</em:translator>
        <em:translator>Premier</em:translator>
        <em:translator>Shirayuki (alphabetical order)</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>kk</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Жарнамаға жол жоқ!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Бауржан Муфтахидинов</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>ko</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>인터넷 이용을 방해하거나 불법·유해한 광고의 차단!</em:description>
        <em:homepageURL>http://adblockplus.org/ko/</em:homepageURL>
        <em:translator>Maybee</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>lt</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklamos tai praeitis!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Algimantas Margevičius</em:translator>
        <em:translator>Jonas Slivka</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>lv</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklāmas ir vakardiena!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Džerijs Šterns</em:translator>
        <em:translator>Janis-Marks Gailis</em:translator>
        <em:translator>Klaids Borovs</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>ms</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Iklan hanyalah pada masa dulu!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>temperror</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>nb-NO</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Si farvel til reklame!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Roy Skoglund</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>nl</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Advertenties behoren tot het verleden!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>markh</em:translator>
        <em:translator>Onno Ekker</em:translator>
        <em:translator>pitdicker</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>pl</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Powiedz NIE! reklamom</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Leszek(teo)Życzkowski</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>pt-BR</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Propaganda indesejada é coisa do passado!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Ajwsert</em:translator>
        <em:translator>Mauro José da Silva</em:translator>
        <em:translator>Teboga</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>pt-PT</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Publicidade ... já era!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>António Mendonça</em:translator>
        <em:translator>Manuela Silva</em:translator>
        <em:translator>Raúl Pimentel</em:translator>
        <em:translator>Sérgio Marques</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>ro</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Elimină publicitatea din paginile web.</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>ultravioletu</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>ru</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Скажи &#34;нет&#34; рекламе!</em:description>
        <em:homepageURL>http://adblockplus.org/ru/</em:homepageURL>
        <em:translator>Wladimir Palant</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>sk</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklamy sú minulosťou!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Ján Kendi (Jacen)</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>sl</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Oglasi so preteklost!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Martin Srebotnjak</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>sq</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklamat jane e kaluara!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Genti Ereqi</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>sr</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Огласи су прошлост!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>kapetance</em:translator>
        <em:translator>ДакСРБИЈА</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>sv-SE</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Säg farväl till all reklam!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Mikael Hiort af Ornäs</em:translator>
        <em:translator>Stefan Lewitas</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>th</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>ลาก่อนพวกโฆษณา!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Anusuk Sangubon(Jaideejung007)</em:translator>
        <em:translator>Ken</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>tr</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Reklamlar geçmişte kaldı!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Ahmet Serkan Tıratacı</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>uk</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Скажи «НІ» рекламі!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Тимофій Бабич</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>vi</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>Quảng cáo đã là dĩ vãng!</em:description>
        <em:homepageURL>http://adblockplus.org/</em:homepageURL>
        <em:translator>Knight Vegor</em:translator>
        <em:translator>Nguyễn Mạnh Hùng</em:translator>
        <em:translator>SITUVN</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>zh-CN</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>广告已成往事！</em:description>
        <em:homepageURL>https://adblockplus.org/zh_CN/</em:homepageURL>
        <em:translator>blackdire</em:translator>
        <em:translator>YFdyh000</em:translator>
      </Description>
    </em:localized>
    <em:localized>
      <Description>
        <em:locale>zh-TW</em:locale>
        <em:creator>Wladimir Palant</em:creator><em:contributor>Claude Lespagnol aka Efdur</em:contributor><em:contributor>Nickolay Ponomarev</em:contributor><em:contributor>Kevin Keller</em:contributor><em:contributor>Fabrice Desré</em:contributor><em:contributor>Hubird</em:contributor><em:contributor>Günther Beyer (opoloo.de)</em:contributor><em:contributor>Algimantas Margevičius</em:contributor><em:contributor>anonymous74100</em:contributor><em:contributor>BsT</em:contributor><em:contributor>Crits</em:contributor><em:contributor>Famlam</em:contributor><em:contributor>fanboy</em:contributor><em:contributor>heradhis</em:contributor><em:contributor>John</em:contributor><em:contributor>Khrin</em:contributor><em:contributor>Lain_13</em:contributor><em:contributor>Li</em:contributor><em:contributor>Lian</em:contributor><em:contributor>MenetZ</em:contributor><em:contributor>MonztA</em:contributor><em:contributor>smed79</em:contributor><em:contributor>tomasko126</em:contributor><em:contributor>Zoso</em:contributor><em:contributor>Александър Станев</em:contributor>
        <em:name>Adblock Plus</em:name>
        <em:description>廣告已成過去式！</em:description>
        <em:homepageURL>https://adblockplus.org/zh_TW/</em:homepageURL>
        <em:translator>Jose Sun</em:translator>
        <em:translator>knight00931</em:translator>
      </Description>
    </em:localized>
    <em:targetApplication>
      <Description>
        <!-- adblockbrowser -->
        <em:id>{55aba3ac-94d3-41a8-9e25-5c21fe874539}</em:id>
        <em:minVersion>1.0</em:minVersion>
        <em:maxVersion>1.0</em:maxVersion>
      </Description>
    </em:targetApplication>
    <em:targetApplication>
      <Description>
        <!-- fennec2 -->
        <em:id>{aa3c5121-dab2-40e2-81ca-7ea25febc110}</em:id>
        <em:minVersion>38.0</em:minVersion>
        <em:maxVersion>*</em:maxVersion>
      </Description>
    </em:targetApplication>
    <em:targetApplication>
      <Description>
        <!-- firefox -->
        <em:id>{ec8030f7-c20a-464f-9b0e-13a3a9e97384}</em:id>
        <em:minVersion>38.0</em:minVersion>
        <em:maxVersion>*</em:maxVersion>
      </Description>
    </em:targetApplication>
    <em:targetApplication>
      <Description>
        <!-- seamonkey -->
        <em:id>{92650c4d-4b8e-4d2a-b7eb-24ecf4f6b63a}</em:id>
        <em:minVersion>2.35</em:minVersion>
        <em:maxVersion>*</em:maxVersion>
      </Description>
    </em:targetApplication>
    <em:targetApplication>
      <Description>
        <!-- thunderbird -->
        <em:id>{3550f703-e582-4d05-9a08-453d09bdfdc6}</em:id>
        <em:minVersion>38.0</em:minVersion>
        <em:maxVersion>52.0</em:maxVersion>
      </Description>
    </em:targetApplication>
    <em:targetApplication>
      <Description>
        <!-- toolkit -->
        <em:id>toolkit@mozilla.org</em:id>
        <em:minVersion>38.0</em:minVersion>
        <em:maxVersion>*</em:maxVersion>
      </Description>
    </em:targetApplication>
  </Description>
</RDF>
';

$installManifest = $gmAviary->parseInstallManifest($installManifest);



gfContent(null, $installManifest);

// ====================================================================================================================

?>