<?php

namespace App\Services\Country;

use Illuminate\Support\Collection;

class StaticCountryProvider implements IsCountryProvider
{
    public function fetch(): Collection
    {
        return collect([
            [
                "name" => "Andorra",
                "code" => "AD",
                "flag" => [
                    "url" => "https://flagcdn.com/ad.svg",
                    "alt" => "The flag of Andorra features three equal vertical bands of blue, yellow and red, with the coat of arms of Andorra centered in the yellow band."
                ]
            ],
            [
                "name" => "French Southern and Antarctic Lands",
                "code" => "TF",
                "flag" => [
                    "url" => "https://flagcdn.com/tf.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Laos",
                "code" => "LA",
                "flag" => [
                    "url" => "https://flagcdn.com/la.svg",
                    "alt" => "The flag of Laos is composed of three horizontal bands of red, blue and red. The blue band is twice the height of the red bands and bears a white circle at its center."
                ]
            ],
            [
                "name" => "Canada",
                "code" => "CA",
                "flag" => [
                    "url" => "https://flagcdn.com/ca.svg",
                    "alt" => "The flag of Canada is composed of a red vertical band on the hoist and fly sides and a central white square that is twice the width of the vertical bands. A large eleven-pointed red maple leaf is centered in the white square."
                ]
            ],
            [
                "name" => "Nigeria",
                "code" => "NG",
                "flag" => [
                    "url" => "https://flagcdn.com/ng.svg",
                    "alt" => "The flag of Nigeria is composed of three equal vertical bands of green, white and green."
                ]
            ],
            [
                "name" => "Vanuatu",
                "code" => "VU",
                "flag" => [
                    "url" => "https://flagcdn.com/vu.svg",
                    "alt" => "The flag of Vanuatu is composed of two equal horizontal bands of red and green, with a black isosceles triangle superimposed on the hoist side of the field. This triangle has its base on the hoist end, spans about two-fifth the width of the field and is enclosed on its sides by the arms of a thin black-edged yellow horizontally oriented Y-shaped band which extends along the boundary of the red and green bands to the fly end of the field. A yellow boar's tusk encircling two yellow crossed namele leaves is centered in the triangle."
                ]
            ],
            [
                "name" => "Czechia",
                "code" => "CZ",
                "flag" => [
                    "url" => "https://flagcdn.com/cz.svg",
                    "alt" => "The flag of Czechia is composed of two equal horizontal bands of white and red, with a blue isosceles triangle superimposed on the hoist side of the field. The triangle has its base on the hoist end and spans about two-fifth the width of the field."
                ]
            ],
            [
                "name" => "Malawi",
                "code" => "MW",
                "flag" => [
                    "url" => "https://flagcdn.com/mw.svg",
                    "alt" => "The flag of Malawi is composed of three equal horizontal bands of black, red and green. The top half of a red sun with thirty-one visible rays is centered in the black band."
                ]
            ],
            [
                "name" => "Mali",
                "code" => "ML",
                "flag" => [
                    "url" => "https://flagcdn.com/ml.svg",
                    "alt" => "The flag of Mali is composed of three equal vertical bands of green, yellow and red."
                ]
            ],
            [
                "name" => "Iceland",
                "code" => "IS",
                "flag" => [
                    "url" => "https://flagcdn.com/is.svg",
                    "alt" => "The flag of Iceland has a blue field with a large white-edged red cross that extends to the edges of the field. The vertical part of this cross is offset towards the hoist side."
                ]
            ],
            [
                "name" => "Norway",
                "code" => "NO",
                "flag" => [
                    "url" => "https://flagcdn.com/no.svg",
                    "alt" => "The flag of Norway has a red field with a large white-edged navy blue cross that extends to the edges of the field. The vertical part of this cross is offset towards the hoist side."
                ]
            ],
            [
                "name" => "Saint Vincent and the Grenadines",
                "code" => "VC",
                "flag" => [
                    "url" => "https://flagcdn.com/vc.svg",
                    "alt" => "The flag of Saint Vincent and the Grenadines is composed of three vertical bands of blue, gold and green. The gold band is twice as wide as the other two bands and bears three green diamonds arranged to form the letter V at its center."
                ]
            ],
            [
                "name" => "Guadeloupe",
                "code" => "GP",
                "flag" => [
                    "url" => "https://flagcdn.com/gp.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Chile",
                "code" => "CL",
                "flag" => [
                    "url" => "https://flagcdn.com/cl.svg",
                    "alt" => "The flag of Chile is composed of two equal horizontal bands of white and red, with a blue square of the same height as the white band superimposed in the canton. A white five-pointed star is centered in the blue square."
                ]
            ],
            [
                "name" => "Bermuda",
                "code" => "BM",
                "flag" => [
                    "url" => "https://flagcdn.com/bm.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Kuwait",
                "code" => "KW",
                "flag" => [
                    "url" => "https://flagcdn.com/kw.svg",
                    "alt" => "The flag of Kuwait is composed of three equal horizontal bands of green, white and red, with a black trapezium superimposed on the hoist side of the field. This trapezium has its base on the hoist end and spans about one-fourth the width of the field."
                ]
            ],
            [
                "name" => "Dominica",
                "code" => "DM",
                "flag" => [
                    "url" => "https://flagcdn.com/dm.svg",
                    "alt" => "The flag of Dominica has a green field with a large centered tricolor cross. The vertical and horizontal parts of the cross each comprise three bands of yellow, black and white. A red circle, bearing a hoist-side facing purple Sisserou parrot standing on a twig and encircled by ten five-pointed yellow-edged green stars, is superimposed at the center of the cross."
                ]
            ],
            [
                "name" => "Montenegro",
                "code" => "ME",
                "flag" => [
                    "url" => "https://flagcdn.com/me.svg",
                    "alt" => "The flag of Montenegro features a large red central rectangular area surrounded by a golden-yellow border. The coat of arms of Montenegro is centered in the red rectangle."
                ]
            ],
            [
                "name" => "United States Virgin Islands",
                "code" => "VI",
                "flag" => [
                    "url" => "https://flagcdn.com/vi.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Cameroon",
                "code" => "CM",
                "flag" => [
                    "url" => "https://flagcdn.com/cm.svg",
                    "alt" => "The flag of Cameroon is composed of three equal vertical bands of green, red and yellow, with a yellow five-pointed star in the center."
                ]
            ],
            [
                "name" => "Sri Lanka",
                "code" => "LK",
                "flag" => [
                    "url" => "https://flagcdn.com/lk.svg",
                    "alt" => "The flag of Sri Lanka features two large adjacent but separate rectangular areas, centered on a golden-yellow field. The smaller hoist-side rectangle is divided into two equal vertical bands of teal and orange, and the larger fly-side rectangle is maroon with a centered golden-yellow lion holding a Kastane sword in its right fore-paw and four golden-yellow Bo leaves, one in each corner."
                ]
            ],
            [
                "name" => "China",
                "code" => "CN",
                "flag" => [
                    "url" => "https://flagcdn.com/cn.svg",
                    "alt" => "The flag of China has a red field. In the canton are five yellow five-pointed stars — a large star and four smaller stars arranged in a vertical arc on the fly side of the large star."
                ]
            ],
            [
                "name" => "Bangladesh",
                "code" => "BD",
                "flag" => [
                    "url" => "https://flagcdn.com/bd.svg",
                    "alt" => "The flag of Bangladesh has a dark green field bearing a large red circle that is offset slightly towards the hoist side of center."
                ]
            ],
            [
                "name" => "Sweden",
                "code" => "SE",
                "flag" => [
                    "url" => "https://flagcdn.com/se.svg",
                    "alt" => "The flag of Sweden has a blue field with a large golden-yellow cross that extend to the edges of the field. The vertical part of this cross is offset towards the hoist side."
                ]
            ],
            [
                "name" => "Grenada",
                "code" => "GD",
                "flag" => [
                    "url" => "https://flagcdn.com/gd.svg",
                    "alt" => "The flag of Grenada features a large central rectangular area surrounded by a red border, with three five-pointed yellow stars centered on the top and bottom borders. The central rectangle is divided diagonally into four alternating triangular areas of yellow at the top and bottom and green on the hoist and fly sides, and a five-pointed yellow star on a red circle is superimposed at its center. A symbolic nutmeg pod is situated on the green hoist-side triangle."
                ]
            ],
            [
                "name" => "Turkey",
                "code" => "TR",
                "flag" => [
                    "url" => "https://flagcdn.com/tr.svg",
                    "alt" => "The flag of Turkey has a red field bearing a large fly-side facing white crescent and a smaller five-pointed white star placed just outside the crescent opening. The white crescent and star are offset slightly towards the hoist side of center."
                ]
            ],
            [
                "name" => "Guinea",
                "code" => "GN",
                "flag" => [
                    "url" => "https://flagcdn.com/gn.svg",
                    "alt" => "The flag of Guinea is composed of three equal vertical bands of red, yellow and green."
                ]
            ],
            [
                "name" => "Tanzania",
                "code" => "TZ",
                "flag" => [
                    "url" => "https://flagcdn.com/tz.svg",
                    "alt" => "The flag of Tanzania features a yellow-edged black diagonal band that extends from the lower hoist-side corner to the upper fly-side corner of the field. Above and beneath this band are a green and light blue triangle respectively."
                ]
            ],
            [
                "name" => "Rwanda",
                "code" => "RW",
                "flag" => [
                    "url" => "https://flagcdn.com/rw.svg",
                    "alt" => "The flag of Rwanda is composed of three horizontal bands of light blue, yellow and green. The light blue band is twice the height of the other two bands and bears a yellow sun with twenty-four rays on its fly side."
                ]
            ],
            [
                "name" => "Singapore",
                "code" => "SG",
                "flag" => [
                    "url" => "https://flagcdn.com/sg.svg",
                    "alt" => "The flag of Singapore is composed of two equal horizontal bands of red and white. On the hoist side of the red band is a fly-side facing white crescent which partially encloses five small five-pointed white stars arranged in the shape of a pentagon."
                ]
            ],
            [
                "name" => "Morocco",
                "code" => "MA",
                "flag" => [
                    "url" => "https://flagcdn.com/ma.svg",
                    "alt" => "The flag of Morocco features a green pentagram — a five-pointed linear star — centered on a red field."
                ]
            ],
            [
                "name" => "Saint Barthélemy",
                "code" => "BL",
                "flag" => [
                    "url" => "https://flagcdn.com/bl.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Iraq",
                "code" => "IQ",
                "flag" => [
                    "url" => "https://flagcdn.com/iq.svg",
                    "alt" => "The flag of Iraq is composed of three equal horizontal bands of red, white and black. In the central white band are Arabic inscriptions in green."
                ]
            ],
            [
                "name" => "Brunei",
                "code" => "BN",
                "flag" => [
                    "url" => "https://flagcdn.com/bn.svg",
                    "alt" => "The flag of Brunei has a yellow field with two adjoining diagonal bands of white and black that extend from the upper hoist side of the field to the lower fly side. The red emblem of Brunei is centered on the field."
                ]
            ],
            [
                "name" => "Isle of Man",
                "code" => "IM",
                "flag" => [
                    "url" => "https://flagcdn.com/im.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "North Korea",
                "code" => "KP",
                "flag" => [
                    "url" => "https://flagcdn.com/kp.svg",
                    "alt" => "The flag of North Korea is composed of three horizontal bands — a large central white-edged red band, and a blue band above and beneath the red band. On the hoist side of the red band is a red five-pointed star within a white circle."
                ]
            ],
            [
                "name" => "Iran",
                "code" => "IR",
                "flag" => [
                    "url" => "https://flagcdn.com/ir.svg",
                    "alt" => "The flag of Iran is composed of three equal horizontal bands of green, white and red. A red emblem of Iran is centered in the white band and Arabic inscriptions in white span the bottom edge of the green band and the top edge of the red band."
                ]
            ],
            [
                "name" => "Curaçao",
                "code" => "CW",
                "flag" => [
                    "url" => "https://flagcdn.com/cw.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Paraguay",
                "code" => "PY",
                "flag" => [
                    "url" => "https://flagcdn.com/py.svg",
                    "alt" => "The flag of Paraguay features three equal horizontal bands of red, white and blue, with an emblem centered in the white band. On the obverse side of the flag depicted, this emblem is the national coat of arms."
                ]
            ],
            [
                "name" => "Albania",
                "code" => "AL",
                "flag" => [
                    "url" => "https://flagcdn.com/al.svg",
                    "alt" => "The flag of Albania features a silhouetted double-headed black eagle at the center of a red field."
                ]
            ],
            [
                "name" => "Tajikistan",
                "code" => "TJ",
                "flag" => [
                    "url" => "https://flagcdn.com/tj.svg",
                    "alt" => "The flag of Tajikistan is composed of three horizontal bands of red, white and green in the ratio of 2:3:2. A golden-yellow crown surmounted by an arc of seven five-pointed golden-yellow stars is centered in the white band."
                ]
            ],
            [
                "name" => "Bolivia",
                "code" => "BO",
                "flag" => [
                    "url" => "https://flagcdn.com/bo.svg",
                    "alt" => "The flag of Bolivia is composed of three equal horizontal bands of red, yellow and green, with the national coat of arms centered in the yellow band."
                ]
            ],
            [
                "name" => "Austria",
                "code" => "AT",
                "flag" => [
                    "url" => "https://flagcdn.com/at.svg",
                    "alt" => "The flag of Austria is composed of three equal horizontal bands of red, white and red."
                ]
            ],
            [
                "name" => "Saint Kitts and Nevis",
                "code" => "KN",
                "flag" => [
                    "url" => "https://flagcdn.com/kn.svg",
                    "alt" => "The flag of Saint Kitts and Nevis features two large five-pointed white stars within a yellow-edged black diagonal band that extends from the lower hoist-side corner to the upper fly-side corner of the field. Above and beneath this band are a green and red triangle respectively."
                ]
            ],
            [
                "name" => "United States Minor Outlying Islands",
                "code" => "UM",
                "flag" => [
                    "url" => "https://flagcdn.com/um.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Colombia",
                "code" => "CO",
                "flag" => [
                    "url" => "https://flagcdn.com/co.svg",
                    "alt" => "The flag of Colombia is composed of three horizontal bands of yellow, blue and red, with the yellow band twice the height of the other two bands."
                ]
            ],
            [
                "name" => "Kosovo",
                "code" => "XK",
                "flag" => [
                    "url" => "https://flagcdn.com/xk.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Belize",
                "code" => "BZ",
                "flag" => [
                    "url" => "https://flagcdn.com/bz.svg",
                    "alt" => "The flag of Belize has a royal blue field with a thin red horizontal band at the top and bottom of the field and the national coat of arms in the center."
                ]
            ],
            [
                "name" => "Guinea-Bissau",
                "code" => "GW",
                "flag" => [
                    "url" => "https://flagcdn.com/gw.svg",
                    "alt" => "The flag of Guinea-Bissau features a red vertical band on its hoist side that takes up about two-fifth the width of the field, and two equal horizontal bands of yellow and green adjoining the vertical band. A five-pointed black star is centered in the vertical band."
                ]
            ],
            [
                "name" => "Marshall Islands",
                "code" => "MH",
                "flag" => [
                    "url" => "https://flagcdn.com/mh.svg",
                    "alt" => "The flag of Marshall Islands has a blue field with two broadening adjacent diagonal bands of orange and white that extend from the lower hoist-side corner to the upper fly-side corner of the field. A large white star with twenty-four rays — four large rays at the cardinal points and twenty smaller rays — is situated in the upper hoist-side corner above the diagonal bands."
                ]
            ],
            [
                "name" => "Myanmar",
                "code" => "MM",
                "flag" => [
                    "url" => "https://flagcdn.com/mm.svg",
                    "alt" => "The flag of Myanmar is composed of three equal horizontal bands of yellow, green and red, with a large five-pointed white star superimposed at the center of the field."
                ]
            ],
            [
                "name" => "French Polynesia",
                "code" => "PF",
                "flag" => [
                    "url" => "https://flagcdn.com/pf.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Brazil",
                "code" => "BR",
                "flag" => [
                    "url" => "https://flagcdn.com/br.svg",
                    "alt" => "The flag of Brazil has a green field with a large yellow rhombus in the center. Within the rhombus is a dark blue globe with twenty-seven small five-pointed white stars depicting a starry sky and a thin white convex horizontal band inscribed with the national motto 'Ordem e Progresso' across its center."
                ]
            ],
            [
                "name" => "Croatia",
                "code" => "HR",
                "flag" => [
                    "url" => "https://flagcdn.com/hr.svg",
                    "alt" => "The flag of Croatia is composed of three equal horizontal bands of red, white and blue, with coat of arms of Croatia superimposed in the center."
                ]
            ],
            [
                "name" => "Somalia",
                "code" => "SO",
                "flag" => [
                    "url" => "https://flagcdn.com/so.svg",
                    "alt" => "The flag of Somalia features a large five-pointed white star centered on a light blue field."
                ]
            ],
            [
                "name" => "Afghanistan",
                "code" => "AF",
                "flag" => [
                    "url" => "https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_the_Taliban.svg",
                    "alt" => "The flag of the Islamic Emirate of Afghanistan has a white field with Arabic inscriptions — the Shahada — in black across its center."
                ]
            ],
            [
                "name" => "Anguilla",
                "code" => "AI",
                "flag" => [
                    "url" => "https://flagcdn.com/ai.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Cook Islands",
                "code" => "CK",
                "flag" => [
                    "url" => "https://flagcdn.com/ck.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Western Sahara",
                "code" => "EH",
                "flag" => [
                    "url" => "https://flagcdn.com/eh.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "New Zealand",
                "code" => "NZ",
                "flag" => [
                    "url" => "https://flagcdn.com/nz.svg",
                    "alt" => "The flag of New Zealand has a dark blue field with the flag of the United Kingdom — the Union Jack — in the canton and a representation of the Southern Cross constellation, made up of four five-pointed white-edged red stars, on the fly side of the field."
                ]
            ],
            [
                "name" => "Eritrea",
                "code" => "ER",
                "flag" => [
                    "url" => "https://flagcdn.com/er.svg",
                    "alt" => "The flag of Eritrea comprises three triangles — a large red isosceles triangle with its base spanning the hoist end and its apex at the midpoint on the fly end, and a green and blue right-angled triangle above and beneath the red triangle. On the hoist side of the red triangle is a golden vertical olive branch encircled by a golden olive wreath."
                ]
            ],
            [
                "name" => "Cambodia",
                "code" => "KH",
                "flag" => [
                    "url" => "https://flagcdn.com/kh.svg",
                    "alt" => "The flag of Cambodia features three horizontal bands of blue, red and blue, with a white depiction of the temple complex, Angkor Wat centered in the red band."
                ]
            ],
            [
                "name" => "Bahamas",
                "code" => "BS",
                "flag" => [
                    "url" => "https://flagcdn.com/bs.svg",
                    "alt" => "The flag of the Bahamas is composed of three equal horizontal bands of aquamarine, yellow and aquamarine, with a black equilateral triangle superimposed on the hoist side of the field. This triangle has its base on the hoist end and spans about one-third the width of the field."
                ]
            ],
            [
                "name" => "Belarus",
                "code" => "BY",
                "flag" => [
                    "url" => "https://flagcdn.com/by.svg",
                    "alt" => "The flag of Belarus features a vertical band, with a white and red ornamental pattern, spanning about one-fifth the width of the field on the hoist side. Adjoining the vertical band are two horizontal bands of red and green, with the red band twice the height of the green band."
                ]
            ],
            [
                "name" => "Norfolk Island",
                "code" => "NF",
                "flag" => [
                    "url" => "https://flagcdn.com/nf.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Tuvalu",
                "code" => "TV",
                "flag" => [
                    "url" => "https://flagcdn.com/tv.svg",
                    "alt" => "The flag of Tuvalu has a light blue field with the flag of the United Kingdom — the Union Jack — in the canton. A representation of the country's nine Islands using nine five-pointed yellow stars is situated in the fly half of the field."
                ]
            ],
            [
                "name" => "South Georgia",
                "code" => "GS",
                "flag" => [
                    "url" => "https://flagcdn.com/gs.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Mauritania",
                "code" => "MR",
                "flag" => [
                    "url" => "https://flagcdn.com/mr.svg",
                    "alt" => "The flag of Mauritania has a green field with a thin red horizontal band at the top and bottom of the field. At the center of the field is a five-pointed yellow star above an upward facing yellow crescent."
                ]
            ],
            [
                "name" => "New Caledonia",
                "code" => "NC",
                "flag" => [
                    "url" => "https://flagcdn.com/nc.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Bulgaria",
                "code" => "BG",
                "flag" => [
                    "url" => "https://flagcdn.com/bg.svg",
                    "alt" => "The flag of Bulgaria is composed of three equal horizontal bands of white, green and red."
                ]
            ],
            [
                "name" => "Mozambique",
                "code" => "MZ",
                "flag" => [
                    "url" => "https://flagcdn.com/mz.svg",
                    "alt" => "The flag of Mozambique is composed of three equal horizontal bands of teal, black with white top and bottom edges, and yellow. A red isosceles triangle spanning about two-fifth the width of the field is superimposed on the hoist side with its base on the hoist end. This triangle bears a crossed rifle and hoe in black superimposed on an open white book which is superimposed on a five-pointed yellow star."
                ]
            ],
            [
                "name" => "Niue",
                "code" => "NU",
                "flag" => [
                    "url" => "https://flagcdn.com/nu.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Estonia",
                "code" => "EE",
                "flag" => [
                    "url" => "https://flagcdn.com/ee.svg",
                    "alt" => "The flag of Estonia is composed of three equal horizontal bands of blue, black and white."
                ]
            ],
            [
                "name" => "Italy",
                "code" => "IT",
                "flag" => [
                    "url" => "https://flagcdn.com/it.svg",
                    "alt" => "The flag of Italy is composed of three equal vertical bands of green, white and red."
                ]
            ],
            [
                "name" => "Malta",
                "code" => "MT",
                "flag" => [
                    "url" => "https://flagcdn.com/mt.svg",
                    "alt" => "The flag of Malta is composed of two equal vertical bands of white and red. A representation of the George cross edged in red is situated on the upper hoist-side corner of the white band."
                ]
            ],
            [
                "name" => "Slovenia",
                "code" => "SI",
                "flag" => [
                    "url" => "https://flagcdn.com/si.svg",
                    "alt" => "The flag of Slovenia is composed of three equal horizontal bands of white, blue and red. The national coat of arms is situated in the upper hoist side of the field centered on the boundary between the white and blue bands."
                ]
            ],
            [
                "name" => "India",
                "code" => "IN",
                "flag" => [
                    "url" => "https://flagcdn.com/in.svg",
                    "alt" => "The flag of India is composed of three equal horizontal bands of saffron, white and green. A navy blue wheel with twenty-four spokes — the Ashoka Chakra — is centered in the white band."
                ]
            ],
            [
                "name" => "Peru",
                "code" => "PE",
                "flag" => [
                    "url" => "https://flagcdn.com/pe.svg",
                    "alt" => "The flag of Peru is composed of three equal vertical bands of red, white and red, with the national emblem centered in the white band."
                ]
            ],
            [
                "name" => "Burundi",
                "code" => "BI",
                "flag" => [
                    "url" => "https://flagcdn.com/bi.svg",
                    "alt" => "The flag of Burundi is divided by a white diagonal cross into four alternating triangular areas of red at the top and bottom, and green on the hoist and fly sides. A white circle, with three green-edged red six-pointed stars arranged to form a triangle, is superimposed at the center of the cross."
                ]
            ],
            [
                "name" => "Lithuania",
                "code" => "LT",
                "flag" => [
                    "url" => "https://flagcdn.com/lt.svg",
                    "alt" => "The flag of Lithuania is composed of three equal horizontal bands of yellow, green and red."
                ]
            ],
            [
                "name" => "United States",
                "code" => "US",
                "flag" => [
                    "url" => "https://flagcdn.com/us.svg",
                    "alt" => "The flag of the United States of America is composed of thirteen equal horizontal bands of red alternating with white. A blue rectangle, bearing fifty small five-pointed white stars arranged in nine rows where rows of six stars alternate with rows of five stars, is superimposed in the canton."
                ]
            ],
            [
                "name" => "Honduras",
                "code" => "HN",
                "flag" => [
                    "url" => "https://flagcdn.com/hn.svg",
                    "alt" => "The flag of Honduras is composed of three equal horizontal bands of turquoise, white and turquoise, with five small five-pointed turquoise stars arranged in a quincuncial pattern at the center of the white band."
                ]
            ],
            [
                "name" => "Tonga",
                "code" => "TO",
                "flag" => [
                    "url" => "https://flagcdn.com/to.svg",
                    "alt" => "The flag of Tonga has a red field. A white rectangle bearing a red Greek cross is superimposed in the canton."
                ]
            ],
            [
                "name" => "Saudi Arabia",
                "code" => "SA",
                "flag" => [
                    "url" => "https://flagcdn.com/sa.svg",
                    "alt" => "The flag of Saudi Arabia has a green field, at the center of which is an Arabic inscription — the Shahada — in white above a white horizontal sabre with its tip pointed to the hoist side of the field."
                ]
            ],
            [
                "name" => "Suriname",
                "code" => "SR",
                "flag" => [
                    "url" => "https://flagcdn.com/sr.svg",
                    "alt" => "The flag of Suriname is composed of five horizontal bands of green, white, red, white and green in the ratio of 2:1:4:1:2. A large five-pointed yellow star is centered in the red band."
                ]
            ],
            [
                "name" => "Qatar",
                "code" => "QA",
                "flag" => [
                    "url" => "https://flagcdn.com/qa.svg",
                    "alt" => "The flag of Qatar has a maroon field, on the hoist side of which is a white vertical band that spans about one-third the width of the field and is separated from the rest of the field by nine adjoining fly-side pointing white isosceles triangles that serve as a serrated line."
                ]
            ],
            [
                "name" => "Saint Helena, Ascension and Tristan da Cunha",
                "code" => "SH",
                "flag" => [
                    "url" => "https://flagcdn.com/sh.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Gibraltar",
                "code" => "GI",
                "flag" => [
                    "url" => "https://flagcdn.com/gi.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Northern Mariana Islands",
                "code" => "MP",
                "flag" => [
                    "url" => "https://flagcdn.com/mp.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Mauritius",
                "code" => "MU",
                "flag" => [
                    "url" => "https://flagcdn.com/mu.svg",
                    "alt" => "The flag of Mauritius is composed of four equal horizontal bands of red, blue, yellow and green."
                ]
            ],
            [
                "name" => "Barbados",
                "code" => "BB",
                "flag" => [
                    "url" => "https://flagcdn.com/bb.svg",
                    "alt" => "The flag of Barbados is composed of three equal vertical bands of ultramarine, gold and ultramarine. The head of a black trident is centered in the gold band."
                ]
            ],
            [
                "name" => "Réunion",
                "code" => "RE",
                "flag" => [
                    "url" => "https://flagcdn.com/re.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "British Indian Ocean Territory",
                "code" => "IO",
                "flag" => [
                    "url" => "https://flagcdn.com/io.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Syria",
                "code" => "SY",
                "flag" => [
                    "url" => "https://flagcdn.com/sy.svg",
                    "alt" => "The flag of Syria is composed of three equal horizontal bands of red, white and black. At the center of the white band are two small five-pointed green stars arranged in a horizontal line."
                ]
            ],
            [
                "name" => "Egypt",
                "code" => "EG",
                "flag" => [
                    "url" => "https://flagcdn.com/eg.svg",
                    "alt" => "The flag of Egypt is composed of three equal horizontal bands of red, white and black, with Egypt's national emblem — a hoist-side facing gold eagle of Saladin — centered in the white band."
                ]
            ],
            [
                "name" => "São Tomé and Príncipe",
                "code" => "ST",
                "flag" => [
                    "url" => "https://flagcdn.com/st.svg",
                    "alt" => "The flag of South Sudan is composed of three equal horizontal bands of black, red with white top and bottom edges, and green. A blue equilateral triangle which spans about two-fifth the width of the field is superimposed on the hoist side with its base on the hoist end of the field. At the center of this triangle is a five-pointed yellow star."
                ]
            ],
            [
                "name" => "Kiribati",
                "code" => "KI",
                "flag" => [
                    "url" => "https://flagcdn.com/ki.svg",
                    "alt" => "The flag of Kiribati is divided into two halves. While the upper half has a red field, at the center of which is a yellow frigate bird flying over the top half of a rising yellow sun with seventeen visible rays, the lower half is composed of six horizontal wavy bands of white alternating with blue to depict the ocean."
                ]
            ],
            [
                "name" => "Timor-Leste",
                "code" => "TL",
                "flag" => [
                    "url" => "https://flagcdn.com/tl.svg",
                    "alt" => "The flag of Timor-Leste has a red field with two isosceles triangles which share a common base on the hoist end. The smaller black triangle, which bears a five-pointed white star at its center and spans one-third the width of the field, is superimposed on the larger yellow triangle that extends to the center of the field."
                ]
            ],
            [
                "name" => "Lesotho",
                "code" => "LS",
                "flag" => [
                    "url" => "https://flagcdn.com/ls.svg",
                    "alt" => "The flag of Lesotho is composed of three horizontal bands of blue, white and green in the ratio of 3:4:3. A black mokorotlo — a Basotho hat — is centered in the white band."
                ]
            ],
            [
                "name" => "Solomon Islands",
                "code" => "SB",
                "flag" => [
                    "url" => "https://flagcdn.com/sb.svg",
                    "alt" => "The flag of Solomon Islands features a thin yellow diagonal band that extends from the lower hoist-side corner to the upper fly-side corner of the field. Above and beneath this band are a blue and green triangle respectively. Five white five-pointed stars arranged in an X shape are situated on the hoist side of the upper blue triangle."
                ]
            ],
            [
                "name" => "Libya",
                "code" => "LY",
                "flag" => [
                    "url" => "https://flagcdn.com/ly.svg",
                    "alt" => "The flag of Libya is composed of three horizontal bands of red, black and green, with the black band twice the height of the other two bands. At the center of the black band is a fly-side facing white crescent and a five-pointed white star placed just outside the crescent opening."
                ]
            ],
            [
                "name" => "South Korea",
                "code" => "KR",
                "flag" => [
                    "url" => "https://flagcdn.com/kr.svg",
                    "alt" => "The flag of South Korea has a white field, at the center of which is a red and blue Taegeuk circle surrounded by four black trigrams, one in each corner."
                ]
            ],
            [
                "name" => "Liechtenstein",
                "code" => "LI",
                "flag" => [
                    "url" => "https://flagcdn.com/li.svg",
                    "alt" => "The flag of Liechtenstein is composed of two equal horizontal bands of blue and red, with a golden-yellow crown on the hoist side of the blue band."
                ]
            ],
            [
                "name" => "Nicaragua",
                "code" => "NI",
                "flag" => [
                    "url" => "https://flagcdn.com/ni.svg",
                    "alt" => "The flag of Nicaragua is composed of three equal horizontal bands of blue, white and blue, with the national coat of arms centered in the white band."
                ]
            ],
            [
                "name" => "Ecuador",
                "code" => "EC",
                "flag" => [
                    "url" => "https://flagcdn.com/ec.svg",
                    "alt" => "The flag of Ecuador is composed of the horizontal bands of yellow, blue and red, with the yellow band twice the height of the other two bands. The Ecuadorian coat of arms is superimposed in the center of the field."
                ]
            ],
            [
                "name" => "Maldives",
                "code" => "MV",
                "flag" => [
                    "url" => "https://flagcdn.com/mv.svg",
                    "alt" => "The flag of Maldives has a red field, at the center of which is a large green rectangle bearing a fly-side facing white crescent."
                ]
            ],
            [
                "name" => "Algeria",
                "code" => "DZ",
                "flag" => [
                    "url" => "https://flagcdn.com/dz.svg",
                    "alt" => "The flag of Algeria features two equal vertical bands of green and white. A five-pointed red star within a fly-side facing red crescent is centered over the two-color boundary."
                ]
            ],
            [
                "name" => "Kyrgyzstan",
                "code" => "KG",
                "flag" => [
                    "url" => "https://flagcdn.com/kg.svg",
                    "alt" => "The flag of Kyrgyzstan features a yellow sun with forty rays at the center of a red field. At the center of the sun is a stylized depiction of a tunduk."
                ]
            ],
            [
                "name" => "Finland",
                "code" => "FI",
                "flag" => [
                    "url" => "https://flagcdn.com/fi.svg",
                    "alt" => "The flag of Finland has a white field with a large blue cross that extend to the edges of the field. The vertical part of this cross is offset towards the hoist side."
                ]
            ],
            [
                "name" => "Antarctica",
                "code" => "AQ",
                "flag" => [
                    "url" => "https://flagcdn.com/aq.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Kenya",
                "code" => "KE",
                "flag" => [
                    "url" => "https://flagcdn.com/ke.svg",
                    "alt" => "The flag of Kenya is composed of three equal horizontal bands of black, red with white top and bottom edges, and green. An emblem comprising a red, black and white Maasai shield covering two crossed white spears is superimposed at the center of the field."
                ]
            ],
            [
                "name" => "Cuba",
                "code" => "CU",
                "flag" => [
                    "url" => "https://flagcdn.com/cu.svg",
                    "alt" => "The flag of Cuba is composed of five equal horizontal bands of blue alternating with white and a red equilateral triangle superimposed on the hoist side of the field. The triangle has its base on the hoist end, spans about two-fifth the width of the field and bears a white five-pointed star at its center."
                ]
            ],
            [
                "name" => "Montserrat",
                "code" => "MS",
                "flag" => [
                    "url" => "https://flagcdn.com/ms.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Poland",
                "code" => "PL",
                "flag" => [
                    "url" => "https://flagcdn.com/pl.svg",
                    "alt" => "The flag of Poland is composed of two equal horizontal bands of white and red."
                ]
            ],
            [
                "name" => "Åland Islands",
                "code" => "AX",
                "flag" => [
                    "url" => "https://flagcdn.com/ax.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Ethiopia",
                "code" => "ET",
                "flag" => [
                    "url" => "https://flagcdn.com/et.svg",
                    "alt" => "The flag of Ethiopia is composed of three equal horizontal bands of green, yellow and red, with the national emblem superimposed at the center of the field. The national emblem comprises a light blue circle bearing a golden-yellow pentagram with single yellow rays emanating from the angles between the points of the pentagram."
                ]
            ],
            [
                "name" => "Togo",
                "code" => "TG",
                "flag" => [
                    "url" => "https://flagcdn.com/tg.svg",
                    "alt" => "The flag of Togo is composed of five equal horizontal bands of green alternating with yellow. A red square bearing a five-pointed white star is superimposed in the canton."
                ]
            ],
            [
                "name" => "Bosnia and Herzegovina",
                "code" => "BA",
                "flag" => [
                    "url" => "https://flagcdn.com/ba.svg",
                    "alt" => "The flag of Bosnia and Herzegovina has a blue field, at the center of which is a large yellow hoist-side facing right-angled triangle that is based on the top edge and spans the height of the field. Adjacent to the hypotenuse of this triangle are nine adjoining five-pointed white stars with the top and bottom stars cut in half by the edges of the field."
                ]
            ],
            [
                "name" => "Uruguay",
                "code" => "UY",
                "flag" => [
                    "url" => "https://flagcdn.com/uy.svg",
                    "alt" => "The flag of Uruguay is composed of nine equal horizontal bands of white alternating with blue, with a white square superimposed in the canton. In the white square is a yellow sun bearing a human face — the Sun of May — from which sixteen rays extend. The sun's rays alternate between triangular and wavy."
                ]
            ],
            [
                "name" => "Guam",
                "code" => "GU",
                "flag" => [
                    "url" => "https://flagcdn.com/gu.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Cape Verde",
                "code" => "CV",
                "flag" => [
                    "url" => "https://flagcdn.com/cv.svg",
                    "alt" => "The flag of Cape Verde is composed of five horizontal bands of blue, white, red, white and blue in the ratio of 6:1:1:1:3. A ring of ten five-pointed yellow stars is centered at three-eighth of the height from the bottom edge and three-eighth of the width from the hoist end of the field."
                ]
            ],
            [
                "name" => "Chad",
                "code" => "TD",
                "flag" => [
                    "url" => "https://flagcdn.com/td.svg",
                    "alt" => "The flag of Chad is composed of three equal vertical bands of blue, gold and red."
                ]
            ],
            [
                "name" => "Vatican City",
                "code" => "VA",
                "flag" => [
                    "url" => "https://flagcdn.com/va.svg",
                    "alt" => "The flag of Vatican City is square shaped. It is composed of two equal vertical bands of yellow and white, with national coat of arms centered in the white band. The national coat of arms comprises the Papal Tiara superimposed on two crossed keys."
                ]
            ],
            [
                "name" => "Palau",
                "code" => "PW",
                "flag" => [
                    "url" => "https://flagcdn.com/pw.svg",
                    "alt" => "The flag of Palau has a light blue field with a large golden-yellow circle that is offset slightly towards the hoist side of center."
                ]
            ],
            [
                "name" => "Haiti",
                "code" => "HT",
                "flag" => [
                    "url" => "https://flagcdn.com/ht.svg",
                    "alt" => "The flag of Haiti is composed of two equal horizontal bands of blue and red. A white square bearing the national coat of arms is superimposed at the center of the field."
                ]
            ],
            [
                "name" => "Yemen",
                "code" => "YE",
                "flag" => [
                    "url" => "https://flagcdn.com/ye.svg",
                    "alt" => "The flag of Yemen is composed of three equal horizontal bands of red, white and black."
                ]
            ],
            [
                "name" => "Eswatini",
                "code" => "SZ",
                "flag" => [
                    "url" => "https://flagcdn.com/sz.svg",
                    "alt" => "The flag of Eswatini is composed of three horizontal bands — a large central yellow-edged red band, and a light blue band above and beneath the red band. The red band is three times the height of the blue bands and bears a centered emblem made up of a large black and white Nguni shield covering two spears and a staff decorated with feather tassels, all placed horizontally."
                ]
            ],
            [
                "name" => "Zimbabwe",
                "code" => "ZW",
                "flag" => [
                    "url" => "https://flagcdn.com/zw.svg",
                    "alt" => "The flag of Zimbabwe is composed of seven equal horizontal bands of green, yellow, red, black, red, yellow and green, with a white isosceles triangle superimposed on the hoist side of the field. This triangle is edged in black, spans about one-fourth the width of the field and has its base on the hoist end. A yellow Zimbabwe bird superimposed on a five-pointed red star is centered in the triangle."
                ]
            ],
            [
                "name" => "Greece",
                "code" => "GR",
                "flag" => [
                    "url" => "https://flagcdn.com/gr.svg",
                    "alt" => "The flag of Greece is composed of nine equal horizontal bands of blue alternating with white. A blue square bearing a white cross is superimposed in the canton."
                ]
            ],
            [
                "name" => "Israel",
                "code" => "IL",
                "flag" => [
                    "url" => "https://flagcdn.com/il.svg",
                    "alt" => "The flag of Israel has a white field with a blue hexagram — the Magen David — centered between two equal horizontal blue bands situated near the top and bottom edges of the field."
                ]
            ],
            [
                "name" => "Saint Martin",
                "code" => "MF",
                "flag" => [
                    "url" => "https://flagcdn.com/mf.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Antigua and Barbuda",
                "code" => "AG",
                "flag" => [
                    "url" => "https://flagcdn.com/ag.svg",
                    "alt" => "The flag of Antigua and Barbuda has a red field with an inverted isosceles triangle based on the top edge and spanning the height of the field. This triangle has three horizontal bands of black, light blue and white, with the light blue band half the height of the two other bands. The top half of a golden-yellow sun is situated in the lower two-third of the black band to depict a rising sun."
                ]
            ],
            [
                "name" => "Cyprus",
                "code" => "CY",
                "flag" => [
                    "url" => "https://flagcdn.com/cy.svg",
                    "alt" => "The flag of Cyprus has a white field, at the center of which is a copper-colored silhouette of the Island of Cyprus above two green olive branches crossed at the stem."
                ]
            ],
            [
                "name" => "Sint Maarten",
                "code" => "SX",
                "flag" => [
                    "url" => "https://flagcdn.com/sx.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Monaco",
                "code" => "MC",
                "flag" => [
                    "url" => "https://flagcdn.com/mc.svg",
                    "alt" => "The flag of Monaco is composed of two equal horizontal bands of red and white."
                ]
            ],
            [
                "name" => "Fiji",
                "code" => "FJ",
                "flag" => [
                    "url" => "https://flagcdn.com/fj.svg",
                    "alt" => "The flag of Fiji has a light blue field. It features the flag of the United Kingdom — the Union Jack — in the canton and the shield of the national coat of arms centered in the fly half."
                ]
            ],
            [
                "name" => "Ukraine",
                "code" => "UA",
                "flag" => [
                    "url" => "https://flagcdn.com/ua.svg",
                    "alt" => "The flag of Ukraine is composed of two equal horizontal bands of blue and yellow."
                ]
            ],
            [
                "name" => "Martinique",
                "code" => "MQ",
                "flag" => [
                    "url" => "https://flagcdn.com/mq.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Hong Kong",
                "code" => "HK",
                "flag" => [
                    "url" => "https://flagcdn.com/hk.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Portugal",
                "code" => "PT",
                "flag" => [
                    "url" => "https://flagcdn.com/pt.svg",
                    "alt" => "The flag of Portugal is composed of two vertical bands of green and red in the ratio of 2:3, with the coat of arms of Portugal centered over the two-color boundary."
                ]
            ],
            [
                "name" => "Bhutan",
                "code" => "BT",
                "flag" => [
                    "url" => "https://flagcdn.com/bt.svg",
                    "alt" => "The flag of Bhutan is divided diagonally, from the lower hoist-side corner to the upper fly-side corner, into an upper yellow and a lower orange triangle. A fly-side facing white dragon holding four jewels in its claws is situated along the boundary of the two triangles."
                ]
            ],
            [
                "name" => "Nepal",
                "code" => "NP",
                "flag" => [
                    "url" => "https://flagcdn.com/np.svg",
                    "alt" => "The flag of Nepal is the world's only non-quadrilateral flag of a sovereign country. It takes the shape of two adjoining right-angled triangles and has a crimson red field with deep blue edges. Within the smaller upper triangle is an emblem of the upper half of a white sun resting on an upward facing white crescent. The lower triangle bears a white sun with twelve rays."
                ]
            ],
            [
                "name" => "France",
                "code" => "FR",
                "flag" => [
                    "url" => "https://flagcdn.com/fr.svg",
                    "alt" => "The flag of France is composed of three equal vertical bands of blue, white and red."
                ]
            ],
            [
                "name" => "Ireland",
                "code" => "IE",
                "flag" => [
                    "url" => "https://flagcdn.com/ie.svg",
                    "alt" => "The flag of Ireland is composed of three equal vertical bands of green, white and orange."
                ]
            ],
            [
                "name" => "United Arab Emirates",
                "code" => "AE",
                "flag" => [
                    "url" => "https://flagcdn.com/ae.svg",
                    "alt" => "The flag of United Arab Emirates features a red vertical band on its hoist side that takes up about one-fourth the width of the field and three equal horizontal bands of green, white and black adjoining the vertical band."
                ]
            ],
            [
                "name" => "Guernsey",
                "code" => "GG",
                "flag" => [
                    "url" => "https://flagcdn.com/gg.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Saint Lucia",
                "code" => "LC",
                "flag" => [
                    "url" => "https://flagcdn.com/lc.svg",
                    "alt" => "The flag of Saint Lucia has a light blue field, at the center of which are two triangles which share a common base — a small golden-yellow isosceles triangle superimposed on a large white-edged black isosceles triangle."
                ]
            ],
            [
                "name" => "Dominican Republic",
                "code" => "DO",
                "flag" => [
                    "url" => "https://flagcdn.com/do.svg",
                    "alt" => "The flag of the Dominican Republic is divided into four rectangles by a centered white cross that extends to the edges of the field and bears the national coat of arms in its center. The upper hoist-side and lower fly-side rectangles are blue and the lower hoist-side and upper fly-side rectangles are red."
                ]
            ],
            [
                "name" => "Serbia",
                "code" => "RS",
                "flag" => [
                    "url" => "https://flagcdn.com/rs.svg",
                    "alt" => "The flag of Serbia is composed of three equal horizontal bands of red, blue and white. The coat of arms of Serbia is superimposed at the center of the field slightly towards the hoist side."
                ]
            ],
            [
                "name" => "Botswana",
                "code" => "BW",
                "flag" => [
                    "url" => "https://flagcdn.com/bw.svg",
                    "alt" => "The flag of Botswana has a light blue field with a white-edged black horizontal band across its center."
                ]
            ],
            [
                "name" => "Ivory Coast",
                "code" => "CI",
                "flag" => [
                    "url" => "https://flagcdn.com/ci.svg",
                    "alt" => "The flag of Ivory Coast is composed of three equal vertical bands of orange, white and green."
                ]
            ],
            [
                "name" => "Ghana",
                "code" => "GH",
                "flag" => [
                    "url" => "https://flagcdn.com/gh.svg",
                    "alt" => "The flag of Ghana is composed of three equal horizontal bands of red, gold and green, with a five-pointed black star centered in the gold band."
                ]
            ],
            [
                "name" => "Comoros",
                "code" => "KM",
                "flag" => [
                    "url" => "https://flagcdn.com/km.svg",
                    "alt" => "The flag of Comoros is composed of four equal horizontal bands of yellow, white, red and blue, with a green isosceles triangle superimposed on the hoist side of the field. This triangle has its base on the hoist end, spans about two-fifth the width of the field and bears a fly-side facing white crescent and four five-pointed white stars arranged in a vertical line along the opening of the crescent."
                ]
            ],
            [
                "name" => "Azerbaijan",
                "code" => "AZ",
                "flag" => [
                    "url" => "https://flagcdn.com/az.svg",
                    "alt" => "The flag of Azerbaijan features three equal horizontal bands of blue, red and green, with a white fly-side facing crescent and eight-pointed star centered in the red band."
                ]
            ],
            [
                "name" => "United Kingdom",
                "code" => "GB",
                "flag" => [
                    "url" => "https://flagcdn.com/gb.svg",
                    "alt" => "The flag of the United Kingdom — the Union Jack — has a blue field. It features the white-edged red cross of Saint George superimposed on the diagonal red cross of Saint Patrick which is superimposed on the diagonal white cross of Saint Andrew."
                ]
            ],
            [
                "name" => "Central African Republic",
                "code" => "CF",
                "flag" => [
                    "url" => "https://flagcdn.com/cf.svg",
                    "alt" => "The flag of Central African Republic is composed of four equal horizontal bands of blue, white, green and yellow intersected at the center by a vertical red band of equal size as the horizontal bands. A yellow five-pointed star is situated on the hoist side of the blue band."
                ]
            ],
            [
                "name" => "Palestine",
                "code" => "PS",
                "flag" => [
                    "url" => "https://flagcdn.com/ps.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Caribbean Netherlands",
                "code" => "BQ",
                "flag" => [
                    "url" => "https://flagcdn.com/bq.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Taiwan",
                "code" => "TW",
                "flag" => [
                    "url" => "https://flagcdn.com/tw.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Pitcairn Islands",
                "code" => "PN",
                "flag" => [
                    "url" => "https://flagcdn.com/pn.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "San Marino",
                "code" => "SM",
                "flag" => [
                    "url" => "https://flagcdn.com/sm.svg",
                    "alt" => "The flag of San Marino is composed of two equal horizontal bands of white and light blue, with the national coat of arms superimposed in the center."
                ]
            ],
            [
                "name" => "Svalbard and Jan Mayen",
                "code" => "SJ",
                "flag" => [
                    "url" => "https://flagcdn.com/sj.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Djibouti",
                "code" => "DJ",
                "flag" => [
                    "url" => "https://flagcdn.com/dj.svg",
                    "alt" => "The flag of Djibouti is composed of two equal horizontal bands of light blue and light green, with a white isosceles triangle superimposed on the hoist side of the field. The triangle has its base on the hoist end, spans about two-fifth the width of the field and bears a red five-pointed star at its center."
                ]
            ],
            [
                "name" => "Wallis and Futuna",
                "code" => "WF",
                "flag" => [
                    "url" => "https://flagcdn.com/wf.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Denmark",
                "code" => "DK",
                "flag" => [
                    "url" => "https://flagcdn.com/dk.svg",
                    "alt" => "The flag of Denmark has a red field with a large white cross that extend to the edges of the field. The vertical part of this cross is offset towards the hoist side."
                ]
            ],
            [
                "name" => "Papua New Guinea",
                "code" => "PG",
                "flag" => [
                    "url" => "https://flagcdn.com/pg.svg",
                    "alt" => "The flag of Papua New Guinea is divided diagonally, from the upper hoist-side corner to the lower fly-side corner, into a lower black and an upper red triangle. On the hoist side of the lower black triangle is a representation of the Southern Cross constellation made up of one small and four larger five-pointed white stars. A golden Raggiana bird-of-paradise is situated on the fly side of the upper red triangle."
                ]
            ],
            [
                "name" => "Madagascar",
                "code" => "MG",
                "flag" => [
                    "url" => "https://flagcdn.com/mg.svg",
                    "alt" => "The flag of Madagascar features a white vertical band on the hoist side that takes up about one-third the width of the field, and two equal horizontal bands of red and green adjoining the vertical band."
                ]
            ],
            [
                "name" => "Bouvet Island",
                "code" => "BV",
                "flag" => [
                    "url" => "https://flagcdn.com/bv.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Hungary",
                "code" => "HU",
                "flag" => [
                    "url" => "https://flagcdn.com/hu.svg",
                    "alt" => "The flag of Hungary is composed of three equal horizontal bands of red, white and green."
                ]
            ],
            [
                "name" => "Tokelau",
                "code" => "TK",
                "flag" => [
                    "url" => "https://flagcdn.com/tk.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Trinidad and Tobago",
                "code" => "TT",
                "flag" => [
                    "url" => "https://flagcdn.com/tt.svg",
                    "alt" => "The flag of Trinidad and Tobago has a red field with a white-edged black diagonal band that extends from the upper hoist-side corner to the lower fly-side corner of the field."
                ]
            ],
            [
                "name" => "Gambia",
                "code" => "GM",
                "flag" => [
                    "url" => "https://flagcdn.com/gm.svg",
                    "alt" => "The flag of Gambia is composed of three equal horizontal bands of red, blue with white top and bottom edges, and green."
                ]
            ],
            [
                "name" => "Luxembourg",
                "code" => "LU",
                "flag" => [
                    "url" => "https://flagcdn.com/lu.svg",
                    "alt" => "The flag of Luxembourg is composed of three equal horizontal bands of red, white and light blue."
                ]
            ],
            [
                "name" => "Cocos (Keeling) Islands",
                "code" => "CC",
                "flag" => [
                    "url" => "https://flagcdn.com/cc.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Republic of the Congo",
                "code" => "CG",
                "flag" => [
                    "url" => "https://flagcdn.com/cg.svg",
                    "alt" => "The flag of the Republic of the Congo features a yellow diagonal band that extends from the lower hoist-side corner to the upper fly-side corner of the field. Above and beneath this band are a green and red triangle respectively."
                ]
            ],
            [
                "name" => "Argentina",
                "code" => "AR",
                "flag" => [
                    "url" => "https://flagcdn.com/ar.svg",
                    "alt" => "The flag of Argentina features three equal horizontal bands of light blue, white and light blue. A brown-edged golden sun is centered in the white band."
                ]
            ],
            [
                "name" => "DR Congo",
                "code" => "CD",
                "flag" => [
                    "url" => "https://flagcdn.com/cd.svg",
                    "alt" => "The flag of the Democratic Republic of the Congo has a sky-blue field with a yellow-edged red diagonal band that extends from the lower hoist-side corner to the upper fly-side corner of the field. A large five-pointed yellow star is situated above the diagonal band on the upper hoist side of the field."
                ]
            ],
            [
                "name" => "Greenland",
                "code" => "GL",
                "flag" => [
                    "url" => "https://flagcdn.com/gl.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Jordan",
                "code" => "JO",
                "flag" => [
                    "url" => "https://flagcdn.com/jo.svg",
                    "alt" => "The flag of Jordan is composed of three equal horizontal bands of black, white and green, with a red isosceles triangle superimposed on the hoist side of the field. This triangle has its base on the hoist end, spans about half the width of the field and bears a small seven-pointed white star at its center."
                ]
            ],
            [
                "name" => "Belgium",
                "code" => "BE",
                "flag" => [
                    "url" => "https://flagcdn.com/be.svg",
                    "alt" => "The flag of Belgium is composed of three equal vertical bands of black, yellow and red."
                ]
            ],
            [
                "name" => "Switzerland",
                "code" => "CH",
                "flag" => [
                    "url" => "https://flagcdn.com/ch.svg",
                    "alt" => "The flag of Switzerland is square shaped. It features a white Swiss cross centered on a red field."
                ]
            ],
            [
                "name" => "Indonesia",
                "code" => "ID",
                "flag" => [
                    "url" => "https://flagcdn.com/id.svg",
                    "alt" => "The flag of Indonesia is composed of two equal horizontal bands of red and white."
                ]
            ],
            [
                "name" => "Lebanon",
                "code" => "LB",
                "flag" => [
                    "url" => "https://flagcdn.com/lb.svg",
                    "alt" => "The flag of Lebanon is composed of three horizontal bands of red, white and red. The white band is twice the height of the red bands and bears a green Lebanese Cedar tree at its center."
                ]
            ],
            [
                "name" => "Malaysia",
                "code" => "MY",
                "flag" => [
                    "url" => "https://flagcdn.com/my.svg",
                    "alt" => "The flag of Malaysia is composed of fourteen equal horizontal bands of red alternating with white. A blue rectangle, bearing a fly-side facing yellow crescent and a fourteen-pointed yellow star placed just outside the crescent opening, is superimposed in the canton."
                ]
            ],
            [
                "name" => "Cayman Islands",
                "code" => "KY",
                "flag" => [
                    "url" => "https://flagcdn.com/ky.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Slovakia",
                "code" => "SK",
                "flag" => [
                    "url" => "https://flagcdn.com/sk.svg",
                    "alt" => "The flag of Slovakia is composed of three equal horizontal bands of white, blue and red. The coat of arms of Slovakia is superimposed at the center of the field slightly towards the hoist side."
                ]
            ],
            [
                "name" => "Armenia",
                "code" => "AM",
                "flag" => [
                    "url" => "https://flagcdn.com/am.svg",
                    "alt" => "The flag of Armenia is composed of three equal horizontal bands of red, blue and orange."
                ]
            ],
            [
                "name" => "Christmas Island",
                "code" => "CX",
                "flag" => [
                    "url" => "https://flagcdn.com/cx.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Mongolia",
                "code" => "MN",
                "flag" => [
                    "url" => "https://flagcdn.com/mn.svg",
                    "alt" => "The flag of Mongolia is composed of three equal vertical bands of red, blue and red, with the national emblem — the Soyombo — in gold centered in the hoist-side red band."
                ]
            ],
            [
                "name" => "Saint Pierre and Miquelon",
                "code" => "PM",
                "flag" => [
                    "url" => "https://flagcdn.com/pm.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Japan",
                "code" => "JP",
                "flag" => [
                    "url" => "https://flagcdn.com/jp.svg",
                    "alt" => "The flag of Japan features a crimson-red circle at the center of a white field."
                ]
            ],
            [
                "name" => "South Africa",
                "code" => "ZA",
                "flag" => [
                    "url" => "https://flagcdn.com/za.svg",
                    "alt" => "The flag of South Africa is composed of two equal horizontal bands of red and blue, with a yellow-edged black isosceles triangle superimposed on the hoist side of the field. This triangle has its base centered on the hoist end, spans about two-fifth the width and two-third the height of the field, and is enclosed on its sides by the arms of a white-edged green horizontally oriented Y-shaped band which extends along the boundary of the red and blue bands to the fly end of the field."
                ]
            ],
            [
                "name" => "Philippines",
                "code" => "PH",
                "flag" => [
                    "url" => "https://flagcdn.com/ph.svg",
                    "alt" => "The flag of Philippines is composed of two equal horizontal bands of blue and red, with a white equilateral triangle superimposed on the hoist side of the field. This triangle has its base on the hoist end, spans about two-fifth the width of the field and bears a central golden-yellow sun with eight rays and a five-pointed golden-yellow star at each vertex."
                ]
            ],
            [
                "name" => "Micronesia",
                "code" => "FM",
                "flag" => [
                    "url" => "https://flagcdn.com/fm.svg",
                    "alt" => "The flag of Micronesia has a light blue field, at the center of which are four five-pointed white stars arranged in the shape of a diamond."
                ]
            ],
            [
                "name" => "Germany",
                "code" => "DE",
                "flag" => [
                    "url" => "https://flagcdn.com/de.svg",
                    "alt" => "The flag of Germany is composed of three equal horizontal bands of black, red and gold."
                ]
            ],
            [
                "name" => "Latvia",
                "code" => "LV",
                "flag" => [
                    "url" => "https://flagcdn.com/lv.svg",
                    "alt" => "The flag of Latvia has a carmine-red field with a thin white horizontal band across the middle of the field."
                ]
            ],
            [
                "name" => "Jamaica",
                "code" => "JM",
                "flag" => [
                    "url" => "https://flagcdn.com/jm.svg",
                    "alt" => "The flag of Jamaica is divided by a gold diagonal cross into four alternating triangular areas of green at the top and bottom, and black on the hoist and fly sides"
                ]
            ],
            [
                "name" => "Macau",
                "code" => "MO",
                "flag" => [
                    "url" => "https://flagcdn.com/mo.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Nauru",
                "code" => "NR",
                "flag" => [
                    "url" => "https://flagcdn.com/nr.svg",
                    "alt" => "The flag of Nauru has a dark blue field with a thin yellow horizontal band across the center and a large white twelve-pointed star beneath the horizontal band on the hoist side of the field."
                ]
            ],
            [
                "name" => "Faroe Islands",
                "code" => "FO",
                "flag" => [
                    "url" => "https://flagcdn.com/fo.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Guyana",
                "code" => "GY",
                "flag" => [
                    "url" => "https://flagcdn.com/gy.svg",
                    "alt" => "The flag of Guyana has a green field with two isosceles triangles which share a common base on the hoist end. The smaller black-edged red triangle spanning half the width of the field is superimposed on the larger white-edged yellow triangle which spans the full width of the field."
                ]
            ],
            [
                "name" => "Burkina Faso",
                "code" => "BF",
                "flag" => [
                    "url" => "https://flagcdn.com/bf.svg",
                    "alt" => "The flag of Burkina Faso features two equal horizontal bands of red and green, with a yellow five-pointed star in the center."
                ]
            ],
            [
                "name" => "Sudan",
                "code" => "SD",
                "flag" => [
                    "url" => "https://flagcdn.com/sd.svg",
                    "alt" => "The flag of Sudan is composed of three equal horizontal bands of red, white and black, with a green isosceles triangle superimposed on the hoist side. The green triangle spans about two-fifth the width of the field with its base on the hoist end."
                ]
            ],
            [
                "name" => "Russia",
                "code" => "RU",
                "flag" => [
                    "url" => "https://flagcdn.com/ru.svg",
                    "alt" => "The flag of Russia is composed of three equal horizontal bands of white, blue and red."
                ]
            ],
            [
                "name" => "Mayotte",
                "code" => "YT",
                "flag" => [
                    "url" => "https://flagcdn.com/yt.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Australia",
                "code" => "AU",
                "flag" => [
                    "url" => "https://flagcdn.com/au.svg",
                    "alt" => "The flag of Australia has a dark blue field. It features the flag of the United Kingdom — the Union Jack — in the canton, beneath which is a large white seven-pointed star. A representation of the Southern Cross constellation, made up of one small five-pointed and four larger seven-pointed white stars, is situated on the fly side of the field."
                ]
            ],
            [
                "name" => "Liberia",
                "code" => "LR",
                "flag" => [
                    "url" => "https://flagcdn.com/lr.svg",
                    "alt" => "The flag of Liberia is composed of eleven equal horizontal bands of red alternating with white. A blue square bearing a five-pointed white star is superimposed in the canton."
                ]
            ],
            [
                "name" => "Mexico",
                "code" => "MX",
                "flag" => [
                    "url" => "https://flagcdn.com/mx.svg",
                    "alt" => "The flag of Mexico is composed of three equal vertical bands of green, white and red, with the national coat of arms centered in the white band."
                ]
            ],
            [
                "name" => "Tunisia",
                "code" => "TN",
                "flag" => [
                    "url" => "https://flagcdn.com/tn.svg",
                    "alt" => "The flag of Tunisia has a red field. A white circle bearing a five-pointed red star within a fly-side facing red crescent is situated at the center of the field."
                ]
            ],
            [
                "name" => "Aruba",
                "code" => "AW",
                "flag" => [
                    "url" => "https://flagcdn.com/aw.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Kazakhstan",
                "code" => "KZ",
                "flag" => [
                    "url" => "https://flagcdn.com/kz.svg",
                    "alt" => "The flag of Kazakhstan has a turquoise field, at the center of which is a gold sun with thirty-two rays above a soaring golden steppe eagle. A thin vertical band displays a national ornamental pattern — koshkar-muiz — in gold near the hoist end."
                ]
            ],
            [
                "name" => "Oman",
                "code" => "OM",
                "flag" => [
                    "url" => "https://flagcdn.com/om.svg",
                    "alt" => "The flag of Oman features a red vertical band on the hoist side that takes up about one-fourth the width of the field, and three equal horizontal bands of white, red and green adjoining the vertical band. At the top of the vertical band is the white emblem of Oman."
                ]
            ],
            [
                "name" => "French Guiana",
                "code" => "GF",
                "flag" => [
                    "url" => "https://flagcdn.com/gf.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Niger",
                "code" => "NE",
                "flag" => [
                    "url" => "https://flagcdn.com/ne.svg",
                    "alt" => "The flag of Niger features three equal horizontal bands of orange, white and green, with an orange circle centered in the white band."
                ]
            ],
            [
                "name" => "Turkmenistan",
                "code" => "TM",
                "flag" => [
                    "url" => "https://flagcdn.com/tm.svg",
                    "alt" => "The flag of Turkmenistan has a green field. It features a red vertical band, bearing five carpet guls stacked above two crossed olive branches, near the hoist end of the field. Just to the fly side of the vertical band near the top edge of the field is a hoist-side facing white crescent and five small five-pointed white stars placed just outside the crescent opening."
                ]
            ],
            [
                "name" => "Sierra Leone",
                "code" => "SL",
                "flag" => [
                    "url" => "https://flagcdn.com/sl.svg",
                    "alt" => "The flag of Sierra Leone is composed of three equal horizontal bands of green, white and blue."
                ]
            ],
            [
                "name" => "Samoa",
                "code" => "WS",
                "flag" => [
                    "url" => "https://flagcdn.com/ws.svg",
                    "alt" => "The flag of Samoa has a red field. A blue rectangle, bearing a representation of the Southern Cross made up of five large and one smaller five-pointed white stars, is superimposed in the canton."
                ]
            ],
            [
                "name" => "Senegal",
                "code" => "SN",
                "flag" => [
                    "url" => "https://flagcdn.com/sn.svg",
                    "alt" => "The flag of Senegal is composed of three equal vertical bands of green, golden-yellow and red, with a five-pointed green star centered in the golden-yellow band."
                ]
            ],
            [
                "name" => "Georgia",
                "code" => "GE",
                "flag" => [
                    "url" => "https://flagcdn.com/ge.svg",
                    "alt" => "The flag of Georgia has a white field with a large centered red cross that extends to the edges and divides the field into four quarters. A small red Bolnur-Katskhuri cross is centered in each quarter."
                ]
            ],
            [
                "name" => "Namibia",
                "code" => "NA",
                "flag" => [
                    "url" => "https://flagcdn.com/na.svg",
                    "alt" => "The flag of Namibia features a white-edged red diagonal band that extends from the lower hoist-side corner to the upper fly-side corner of the field. Above and beneath this band are a blue and green triangle respectively. A gold sun with twelve triangular rays is situated on the hoist side of the upper triangle."
                ]
            ],
            [
                "name" => "South Sudan",
                "code" => "SS",
                "flag" => [
                    "url" => "https://flagcdn.com/ss.svg",
                    "alt" => "The flag of South Sudan is composed of three equal horizontal bands of black, red with white top and bottom edges, and green. A blue equilateral triangle which spans about two-fifth the width of the field is superimposed on the hoist side with its base on the hoist end of the field. At the center of this triangle is a five-pointed yellow star."
                ]
            ],
            [
                "name" => "Thailand",
                "code" => "TH",
                "flag" => [
                    "url" => "https://flagcdn.com/th.svg",
                    "alt" => "The flag of Thailand is composed of five horizontal bands of red, white, blue, white and red, with the central blue band twice the height of the other four bands."
                ]
            ],
            [
                "name" => "Bahrain",
                "code" => "BH",
                "flag" => [
                    "url" => "https://flagcdn.com/bh.svg",
                    "alt" => "The flag of Bahrain has a red field. On the hoist side, it features a white vertical band that spans about one-third the width of the field and is separated from the rest of the field by five adjoining fly-side pointing white isosceles triangles that serve as a serrated line."
                ]
            ],
            [
                "name" => "Heard Island and McDonald Islands",
                "code" => "HM",
                "flag" => [
                    "url" => "https://flagcdn.com/hm.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Falkland Islands",
                "code" => "FK",
                "flag" => [
                    "url" => "https://flagcdn.com/fk.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Jersey",
                "code" => "JE",
                "flag" => [
                    "url" => "https://flagcdn.com/je.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Vietnam",
                "code" => "VN",
                "flag" => [
                    "url" => "https://flagcdn.com/vn.svg",
                    "alt" => "The flag of Vietnam features a large five-pointed yellow star on a red field."
                ]
            ],
            [
                "name" => "Guatemala",
                "code" => "GT",
                "flag" => [
                    "url" => "https://flagcdn.com/gt.svg",
                    "alt" => "The flag of Guatemala is composed of three equal vertical bands of light blue, white and light blue, with the national coat of arms centered in the white band."
                ]
            ],
            [
                "name" => "Moldova",
                "code" => "MD",
                "flag" => [
                    "url" => "https://flagcdn.com/md.svg",
                    "alt" => "The flag of Moldova is composed of three equal vertical bands of blue, yellow and red, with the national coat of arms centered in the yellow band."
                ]
            ],
            [
                "name" => "North Macedonia",
                "code" => "MK",
                "flag" => [
                    "url" => "https://flagcdn.com/mk.svg",
                    "alt" => "The flag of North Macedonia has a red field, at the center of which is a golden-yellow sun with eight broadening rays that extend to the edges of the field."
                ]
            ],
            [
                "name" => "Uzbekistan",
                "code" => "UZ",
                "flag" => [
                    "url" => "https://flagcdn.com/uz.svg",
                    "alt" => "The flag of Uzbekistan is composed of three equal horizontal bands of turquoise, white with red top and bottom edges, and green. On the hoist side of the turquoise band is a fly-side facing white crescent and twelve five-pointed white stars arranged just outside the crescent opening in three rows comprising three, four and five stars."
                ]
            ],
            [
                "name" => "Romania",
                "code" => "RO",
                "flag" => [
                    "url" => "https://flagcdn.com/ro.svg",
                    "alt" => "The flag of Romania is composed of three equal vertical bands of navy blue, yellow and red."
                ]
            ],
            [
                "name" => "Uganda",
                "code" => "UG",
                "flag" => [
                    "url" => "https://flagcdn.com/ug.svg",
                    "alt" => "The flag of Uganda is composed of six equal horizontal bands of black, yellow, red, black, yellow and red. A white circle bearing a hoist-side facing grey red-crested crane is superimposed in the center of the field."
                ]
            ],
            [
                "name" => "El Salvador",
                "code" => "SV",
                "flag" => [
                    "url" => "https://flagcdn.com/sv.svg",
                    "alt" => "The flag of El Salvador is composed of three equal horizontal bands of cobalt blue, white and cobalt blue, with the national coat of arms centered in the white band."
                ]
            ],
            [
                "name" => "Zambia",
                "code" => "ZM",
                "flag" => [
                    "url" => "https://flagcdn.com/zm.svg",
                    "alt" => "The flag of Zambia has a green field, on the fly side of which is a soaring orange African fish eagle above a rectangular area divided into three equal vertical bands of red, black and orange."
                ]
            ],
            [
                "name" => "Gabon",
                "code" => "GA",
                "flag" => [
                    "url" => "https://flagcdn.com/ga.svg",
                    "alt" => "The flag of Gabon is composed of three equal horizontal bands of green, yellow and blue."
                ]
            ],
            [
                "name" => "Equatorial Guinea",
                "code" => "GQ",
                "flag" => [
                    "url" => "https://flagcdn.com/gq.svg",
                    "alt" => "The flag of Equatorial Guinea is composed of three equal horizontal bands of green, white and red with the national coat of arms centered in the white band and an isosceles triangle superimposed on the hoist side of the field. The triangle is light blue, has its base on the hoist end and spans about one-fifth the width of the field."
                ]
            ],
            [
                "name" => "Spain",
                "code" => "ES",
                "flag" => [
                    "url" => "https://flagcdn.com/es.svg",
                    "alt" => "The flag of Spain is composed of three horizontal bands of red, yellow and red, with the yellow band twice the height of the red bands. In the yellow band is the national coat of arms offset slightly towards the hoist side of center."
                ]
            ],
            [
                "name" => "Netherlands",
                "code" => "NL",
                "flag" => [
                    "url" => "https://flagcdn.com/nl.svg",
                    "alt" => "The flag of the Netherlands is composed of three equal horizontal bands of red, white and blue."
                ]
            ],
            [
                "name" => "British Virgin Islands",
                "code" => "VG",
                "flag" => [
                    "url" => "https://flagcdn.com/vg.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Benin",
                "code" => "BJ",
                "flag" => [
                    "url" => "https://flagcdn.com/bj.svg",
                    "alt" => "The flag of Benin features a green vertical band on its hoist side that takes up about two-fifth the width of the field and two equal horizontal bands of yellow and red adjoining the vertical band."
                ]
            ],
            [
                "name" => "Pakistan",
                "code" => "PK",
                "flag" => [
                    "url" => "https://flagcdn.com/pk.svg",
                    "alt" => "The flag of Pakistan is composed of a white vertical band on its hoist side that takes up about one-fourth the width of the field and a dark green rectangular area that spans the rest of the field. A white fly-side facing crescent and five-pointed star are centered in the dark green area."
                ]
            ],
            [
                "name" => "Panama",
                "code" => "PA",
                "flag" => [
                    "url" => "https://flagcdn.com/pa.svg",
                    "alt" => "The flag of Panama is composed of four equal rectangular areas — a white rectangular area with a blue five-pointed star at its center, a red rectangular area, a white rectangular area with a red five-pointed star at its center, and a blue rectangular area — in the upper hoist side, upper fly side, lower fly side and lower hoist side respectively."
                ]
            ],
            [
                "name" => "Turks and Caicos Islands",
                "code" => "TC",
                "flag" => [
                    "url" => "https://flagcdn.com/tc.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Angola",
                "code" => "AO",
                "flag" => [
                    "url" => "https://flagcdn.com/ao.svg",
                    "alt" => "The flag of Angola features two equal horizontal bands of red and black, with a yellow emblem at its centre. This emblem consists of a five-pointed star within the hoist-side facing half of a cogwheel that is crossed on its lower end by a machete."
                ]
            ],
            [
                "name" => "American Samoa",
                "code" => "AS",
                "flag" => [
                    "url" => "https://flagcdn.com/as.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Venezuela",
                "code" => "VE",
                "flag" => [
                    "url" => "https://flagcdn.com/ve.svg",
                    "alt" => "The flag of Venezuela is composed of three equal horizontal bands of yellow, blue and red. At the center of the blue band are eight five-pointed white stars arranged in a horizontal arc."
                ]
            ],
            [
                "name" => "Costa Rica",
                "code" => "CR",
                "flag" => [
                    "url" => "https://flagcdn.com/cr.svg",
                    "alt" => "The flag of Costa Rica is composed of five horizontal bands of blue, white, red, white and blue. The central red band is twice the height of the other four bands."
                ]
            ],
            [
                "name" => "Puerto Rico",
                "code" => "PR",
                "flag" => [
                    "url" => "https://flagcdn.com/pr.svg",
                    "alt" => null
                ]
            ],
            [
                "name" => "Seychelles",
                "code" => "SC",
                "flag" => [
                    "url" => "https://flagcdn.com/sc.svg",
                    "alt" => "The flag of Seychelles is composed of five broadening oblique bands of blue, yellow, red, white and green, which extend from the hoist side of the bottom edge to the top and fly edges of the field."
                ]
            ]
        ]);
    }
}
