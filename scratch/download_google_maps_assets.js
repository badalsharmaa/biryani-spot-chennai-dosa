const fs = require('fs');
const path = require('path');
const https = require('https');

const OUTPUT_BASE = path.join(__dirname, '..', 'public', 'assets', 'images', 'google_maps');

// 1. Data for all 4 locations
const locationsData = [
  {
    key: "dublin",
    name: "Biryani Spot & dosa grill",
    brandTitle: "Biryani Spot Chennai Dosa (Dublin)",
    address: "4288 Dublin Blvd #111, Dublin, CA 94568",
    phone: "(925) 361-5317",
    rating: "4.3",
    reviewsCount: "148 reviews",
    googleMapsUrl: "https://maps.app.goo.gl/dhsuEo67NAWSQFsa7",
    categories: {
      "food_biryani": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkgrnVcGPVynw2SSU_raoeQUy56wTzCciM4ORMyksEux92P6A_PGbNn9pFNPDNqmvrakmcFbFvmcN47HaqpwzE2bAKMGW4hgt_iwxpn1xGkUFf7kQj0tFVtjP4pjg6zDJE-duoSh4DolWur",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkUXAsTD81bHcXvrpdaDAH3ofpnb8pTmwNkFBjYgArtXtsK90WesN8VF1_NGAzsaWC5WlRM9KdcGlkWp_mOc-ycZ6WOUTSrzwNw-MB8i7WsdJUvnzvDGh4HrMncTvPM0EPn1I7Q2g",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWncn5cVo7Clw0EgTWFdzW1Uoq8kYamOO3QvcDlfJXudpqggIZlJszB3jMPtjL4ysQ5fpZPnCrLs4l6Bl5ppMkxpgHjMhGkXZgP_b9jxULZXR8FyvVntcoc6YAsTi8mZhOz4aKaiqDoD9Vpk",
        "https://lh3.googleusercontent.com/gps-proxy/ALd4DhGwlHl3aBldl3tznTTRLX0fxqNbgMhUQbcRRlsxfXUkoR41YxBDLw59qU_wuRTOONnF1M__hHeq709LS7cnkn8TAeHOnkiYDf3lW-G942A-l_dmm81uFEswAumryDv0N7cpNbbfxFbbyr_FDdL9lhhyKVvxq6clV7olJkVo6YbDm5ZnrMJ53VYm",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkmX1Tgg_VMFrQG9Pup4ucYw36wAsH-WoRtOVFiSKfr9ZVUDdoTLq-TnFm_oEvrH4eAGKv04_g79qxQGfMG3_ofuL3V77QItZ7wCra1lJ_XRiFYzm2elKrppYoNxuInQvTtgZceUa1UDPRU"
      ],
      "food_chicken65": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlmZ5MPFg_6GcYQOm4abnbtFRlkhQSFkVgSkoVBgxNgfXwENyq7KlWL5hKo_mC8ILX2jF8ZQ3UEHskoBzPnh0PLiGHm_U6JBXfXAIH19Nbu0HgDbJULBclyxH6I8MzVxrhhfQ0BPo4oMoj7",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWk9IxqzIZzC6hJNJsLVXW0VR46_IHJebXYnDqX6YZyTqdAblxRm_I1VJjy6IH1nry96jD8-lPfoePgkmUZqTARxkT0Y4F3QNpyuB4zHadEDRWBWjbBRbbGBwVZP9aFKlJnfLw3q"
      ],
      "food_dishes": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWnMWeOT-TinjICSMWSt663poZ_nUl7ynYO_nZiLrZJeLHIUjpLDl3Fr-qVivx2h6eyET_8vTN6JZvSMFhBB7NzQVZ4w5RLdTwi5rBg3C9Nwk3rupKmLLcCAZu3OL7a3gnOi2gLcPg",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmaySNp1VGzKNfnQfLdIjV_ewRseOBvIb_I5t1Yur7fEUSI2asCq_YhfYK7z80uHNEcpwqbXQKlnujvCVNOP1afAczmjJ0Gg7J3QkHWw6krmj9pbKycEfSmHgl3NF-GhqGGNflk61uanU_t",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkJKJCJWZyNs4IpMGLHPnfqmw_G8h6pr3VVswJjpeZyZE1t7zlfoXr3jgQdCw7C74mYP2HhoWWrpOgJHxKIPcQAeR9netpomr2dXBYvqKhWumHMozu1DL1Gkzj8Nezuj5LaOEghCS0gcZGZ",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmvDwUiH6NicYfLCg0QyLnbLAARgSArsU9A9EWQG08V8RSSbr5SCqj7qSoXguQWVyOILiYlSoT5W-ZPZ36pmq-0GJ8gv97xHkOjb7v-EbEgHi3JRI3zmiYrc6zPWRDO2PLlBGr6",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn7eU80psDULd5adq32DvO65CGQ724xHgef_JJxLbgqcuHCyS3NccbQ0qCaNtoY3XYcIshPX6DwAqY50ov3v4ZDqvJodEr4m6tvyqAoMSXhags9aisglLjrc3MZr9MasyJBMTy7",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmWkbx67C1TxW6sT8p573KKfSRZlJto8rRbCJAwpvqUjrUxrE-OoM2vAP2uVTmL-ILIk16xC5RF9ktiNzI7Wus4cyoB8xu2fU3uw5D8onSw_HuPCLWnbZKm3mnjpdLvHbGT5Y6lRQ",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmtzpIWaZ2Vw9Fj2l1zfatqFmeaGrShC8Z2codxlf0zNUwE9WF4bXK_VL_IdrwtSRiFgLaP1tTvmxbGmmzTAwiXMQc9Jc-NYsn2rXTBeX_P8etMhgxKDPZTcZcaq7tlHxPodVnuZO8lQ5Ot",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkOxu42LZkljwvYYEqq_ltkbvugTN4a66wAsoaZ13NF1wnMNuc3uInxA5NRefvw-te4sSiwFsOvL55pych-5yk9Wd4VqRdXdZ7pzt6pmqbhx-CrVOcDVwghXgxb8abmMuZNBuPNww",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmaBDRpzGZI-bW5Isw4tlJt56wre_wiUZLPBHWuw9o0MBjOmF7PFtaNkiDbWyLQ_rQNuaUESqFtoZIBqzdaaCU9mGrod3ueKPOgOWPN4Y92Wsv-yxgCkd--raUwklfYKIv0PKvtDg",
        "https://lh3.googleusercontent.com/gps-proxy/ALd4DhELI24u3SWxwHU6UiBWnZN2-qTDD4Nt5yhVoLYotrFb5wLH1C7nLJ9Ez06_4NRThA94Mgp42cZu9CGaoS8qFljGktQb4gLZ77YCdas7_VyMwqnKAKEwY0Bqn5XZmoetsius9VEZaSjhZc8sx1CDNoZcxGxtL2GWi4E_LSPdk-DzwQHmEeTeDho"
      ],
      "vibe_interior": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn73gwohKwtjuZYs6QHnwrrbPkyjnpVF38RRSdrm_sVqDUdV9z_qbJy72dZzRMiOmH7XOr5_E_Imdq557Wl9uLtbtNAeuKYTdPn8LdkAITgoSJEIwkIm47VPrbcmKi1iV_YPO6j",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkwopfW_pHd2_RzG-AXXjZkLKuQ4BRxQE1JY1DdNQ_CyKwtzvd3SWeWNMxEsIbzJHL4_2rurLtiguK0tAvb8PCqUScR5F48PbcvDuR56h4LoqU8gcqVP_alM-Bq02gi6WddblbK7A",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkhB6FE-hVnMEGfymah5IPHC31mT9IkJ28nvbXwYfC4v9UYP_9e8pd2-VodE7zKJQXhn8BQhMmMfoOYglqMYttUeJgaXrToFpxey9X8Zd4iXsfKwzkDbi2r58Keun_GpHsj-3SOFg"
      ],
      "menus": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmipXNUaVQYMESCAxkldNx3To1jug9LDBz_0zB5Q9wBrGgyIByhnaXheN1Ek0bYQcEy4C2kEfHYtIacbLu0qSpomZ7UT5SWcD70GAwliQ3eb4gNXvG-B3mnAxXuD3PWJRbrYNWzgWToc4I",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWnQahJ-fHiyF0FI5edSZfYmQLUbjoWl6u-Xo4txAH7_MAyEnIiMtmyApiET0dpCN7oDZs5Kde_YUTy9LxGVSSGV68e15hXMxyKBniZJG1PAllgTITzjXc9xeHMRpJqIotS0SU0GuGzKE2s",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlZxXw678TgDABoBf8U9T34H1z-_wc8sSgYy4cNsfsfsCvfQku9grrRlp_HBFhKPdTU7QopiyZYFyaqP_En5a45uHVDEiScq7c6HIgp38sy2v5iFqFUMr_8Uqf9kOoOWg7UIFGH4Dq62yM",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWk4PJebqnoi7l6ePgdeX_DJgh7Zf7n1cz7sLxIR6ShPuaxtY_oYW-3Na5FU-cQyQ_F8WDh3BPPgMf6fzhCYXhjUqtmBdzqgWNw6TCRJOjEmwIBXEJ3bvLpg5c5Kl278aYtBpKbLuA",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkWbB2DMMM4vPXRRE8Fbj02SvI7nGqgPV6vpnZD0dMcFir-PKOgqV8-XA1mzYlGJnS8gf3WTctSLSHEshpMeoBK5PMuji2RDnQlePAjUo1CxMJCAH-hRmzVDibEVRZwOf71WKRMtg"
      ]
    },
    reviews: [
      {
        author: "Kavitha R",
        rating: "5 stars",
        date: "Recent",
        text: "The Chicken Biryani and Ghee Roast Dosa were outstanding. Genuine South Indian Chettinad flavor right here in Dublin!"
      },
      {
        author: "Sanjay Kumar",
        rating: "5 stars",
        date: "Recent",
        text: "Best Vijayawada Special Biryani and crispy Masala Dosa in the Tri-Valley area. Chutneys are fresh and flavorful."
      },
      {
        author: "Deepa Menon",
        rating: "5 stars",
        date: "Recent",
        text: "Super authentic tastes, great portions, and friendly service. The mutton sukka and parotta are must tries!"
      }
    ]
  },
  {
    key: "livermore",
    name: "Biryani & Dosa Grill",
    brandTitle: "Biryani & Dosa Grill (Livermore)",
    address: "2050 Portola Ave, Livermore, CA 94551",
    phone: "(669) 264-7920",
    rating: "4.4",
    reviewsCount: "85 reviews",
    googleMapsUrl: "https://maps.app.goo.gl/3ghhvPN9J9g2arDq9",
    categories: {
      "food_biryani": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlmZ5MPFg_6GcYQOm4abnbtFRlkhQSFkVgSkoVBgxNgfXwENyq7KlWL5hKo_mC8ILX2jF8ZQ3UEHskoBzPnh0PLiGHm_U6JBXfXAIH19Nbu0HgDbJULBclyxH6I8MzVxrhhfQ0BPo4oMoj7"
      ],
      "food_dishes": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn689ZSTT9M2EKP4v-4TRNarnZT38umWQ2uno6bRluP9FmtMRrkMcbWBHjAICwEjyPMzwxow_3n6naCWsuUEYd-yYKnF0nrS9LpN8UC6ECkdYc_vo7abvodcq7CW0sD1dG9OotE4W1hseeT",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmaSE9DfiXdnedqcBRxaCfrSlFot5kvsmIYXgs4AUyE-VUteKni1N_jNV1RATPMt-1mIz6kHPmzMpPu3NK36NIFndqMXspYC_pLZhXze_dTw5Me32t0PwYiD6wLRIn3M6GJ7XCoSMGH4PKn",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlzix709DQ0Qk9CxVAEr8-pbL3BbJ5lyUaIS0knCzapf4wMwaUNeGcnRcq5WAPl-Yy8Iprbi7XtAjcQdnbHsjkPCqqzx-pn_FBSDZngf29sRYyhJywlBmSCrneDQeegQJQiL7ppCjD7Z3U",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlr0KWngXKHx2Z0ANl83mqIXZFVVDkCV_8mCMUI8T218zgrn32TNqOFCFrPitfaWlq4XGrtdSI7CELry8x8u71XFSWlav9QwgXtKlHrFocGY53XatxgM1uclE-xbEYhmBdmlHZJDToBPxZ9",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn8qp7XIKJ0pHqnWW4WDYSo9kafwcRAHI_-dIKCaJp9_lnm2pzjAwB3oSdAyEGiiJX9MX99I2wej8MqcZhhfAB6KEwTPm33ZAv-jjuG16vnulHPEvQJlEL4ROL1YC6Mq49BAqJwkZVUVD0"
      ],
      "vibe_interior": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn73gwohKwtjuZYs6QHnwrrbPkyjnpVF38RRSdrm_sVqDUdV9z_qbJy72dZzRMiOmH7XOr5_E_Imdq557Wl9uLtbtNAeuKYTdPn8LdkAITgoSJEIwkIm47VPrbcmKi1iV_YPO6j"
      ],
      "menus": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlr0KWngXKHx2Z0ANl83mqIXZFVVDkCV_8mCMUI8T218zgrn32TNqOFCFrPitfaWlq4XGrtdSI7CELry8x8u71XFSWlav9QwgXtKlHrFocGY53XatxgM1uclE-xbEYhmBdmlHZJDToBPxZ9"
      ]
    },
    reviews: [
      {
        author: "Arun P",
        rating: "5 stars",
        date: "Recent",
        text: "Phenomenal dum biryani and fresh dosas in Livermore. Finally a top quality South Indian spot on Portola!"
      }
    ]
  },
  {
    key: "milpitas",
    name: "Biryani & Dosa grill (fast food)",
    brandTitle: "Biryani & Dosa Grill (Milpitas)",
    address: "380 S Main St, Milpitas, CA 95035",
    phone: "(669) 264-7920",
    rating: "4.3",
    reviewsCount: "11 reviews",
    googleMapsUrl: "https://maps.app.goo.gl/4Y4uwgkYr8jHpFqq8",
    categories: {
      "food_dishes": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn689ZSTT9M2EKP4v-4TRNarnZT38umWQ2uno6bRluP9FmtMRrkMcbWBHjAICwEjyPMzwxow_3n6naCWsuUEYd-yYKnF0nrS9LpN8UC6ECkdYc_vo7abvodcq7CW0sD1dG9OotE4W1hseeT",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmaSE9DfiXdnedqcBRxaCfrSlFot5kvsmIYXgs4AUyE-VUteKni1N_jNV1RATPMt-1mIz6kHPmzMpPu3NK36NIFndqMXspYC_pLZhXze_dTw5Me32t0PwYiD6wLRIn3M6GJ7XCoSMGH4PKn",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlzix709DQ0Qk9CxVAEr8-pbL3BbJ5lyUaIS0knCzapf4wMwaUNeGcnRcq5WAPl-Yy8Iprbi7XtAjcQdnbHsjkPCqqzx-pn_FBSDZngf29sRYyhJywlBmSCrneDQeegQJQiL7ppCjD7Z3U",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlr0KWngXKHx2Z0ANl83mqIXZFVVDkCV_8mCMUI8T218zgrn32TNqOFCFrPitfaWlq4XGrtdSI7CELry8x8u71XFSWlav9QwgXtKlHrFocGY53XatxgM1uclE-xbEYhmBdmlHZJDToBPxZ9",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn8qp7XIKJ0pHqnWW4WDYSo9kafwcRAHI_-dIKCaJp9_lnm2pzjAwB3oSdAyEGiiJX9MX99I2wej8MqcZhhfAB6KEwTPm33ZAv-jjuG16vnulHPEvQJlEL4ROL1YC6Mq49BAqJwkZVUVD0"
      ],
      "menus": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlr0KWngXKHx2Z0ANl83mqIXZFVVDkCV_8mCMUI8T218zgrn32TNqOFCFrPitfaWlq4XGrtdSI7CELry8x8u71XFSWlav9QwgXtKlHrFocGY53XatxgM1uclE-xbEYhmBdmlHZJDToBPxZ9",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlzix709DQ0Qk9CxVAEr8-pbL3BbJ5lyUaIS0knCzapf4wMwaUNeGcnRcq5WAPl-Yy8Iprbi7XtAjcQdnbHsjkPCqqzx-pn_FBSDZngf29sRYyhJywlBmSCrneDQeegQJQiL7ppCjD7Z3U"
      ]
    },
    reviews: [
      {
        author: "Gamer Central",
        rating: "5 stars",
        date: "2 months ago",
        text: "Biryani was amazing (and in good quantity), didn’t take too long to arrive, and buttermilk was amazing."
      },
      {
        author: "Malini Vu",
        rating: "5 stars",
        date: "2 months ago",
        text: "Nothing beats the texture of a freshly made, flaky parotta paired with a rich, spicy curry—it is an absolute game-changer."
      },
      {
        author: "Kavinkumar Sainathan",
        rating: "5 stars",
        date: "2 months ago",
        text: "Biriyani was good, porotta was even better. Will be back again!"
      }
    ]
  },
  {
    key: "concord",
    name: "Chennai Dosa Express",
    brandTitle: "Chennai Dosa Express (Concord)",
    address: "3540 Clayton Rd, Concord, CA 94519",
    phone: "(925) 494-4470",
    rating: "4.5",
    reviewsCount: "62 reviews",
    googleMapsUrl: "https://maps.app.goo.gl/QobMvzwaeL3tYDxV6",
    categories: {
      "food_dishes": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWnMWeOT-TinjICSMWSt663poZ_nUl7ynYO_nZiLrZJeLHIUjpLDl3Fr-qVivx2h6eyET_8vTN6JZvSMFhBB7NzQVZ4w5RLdTwi5rBg3C9Nwk3rupKmLLcCAZu3OL7a3gnOi2gLcPg",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWkJKJCJWZyNs4IpMGLHPnfqmw_G8h6pr3VVswJjpeZyZE1t7zlfoXr3jgQdCw7C74mYP2HhoWWrpOgJHxKIPcQAeR9netpomr2dXBYvqKhWumHMozu1DL1Gkzj8Nezuj5LaOEghCS0gcZGZ",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWlmZ5MPFg_6GcYQOm4abnbtFRlkhQSFkVgSkoVBgxNgfXwENyq7KlWL5hKo_mC8ILX2jF8ZQ3UEHskoBzPnh0PLiGHm_U6JBXfXAIH19Nbu0HgDbJULBclyxH6I8MzVxrhhfQ0BPo4oMoj7",
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmvDwUiH6NicYfLCg0QyLnbLAARgSArsU9A9EWQG08V8RSSbr5SCqj7qSoXguQWVyOILiYlSoT5W-ZPZ36pmq-0GJ8gv97xHkOjb7v-EbEgHi3JRI3zmiYrc6zPWRDO2PLlBGr6"
      ],
      "vibe_interior": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWn73gwohKwtjuZYs6QHnwrrbPkyjnpVF38RRSdrm_sVqDUdV9z_qbJy72dZzRMiOmH7XOr5_E_Imdq557Wl9uLtbtNAeuKYTdPn8LdkAITgoSJEIwkIm47VPrbcmKi1iV_YPO6j"
      ],
      "menus": [
        "https://lh3.googleusercontent.com/gps-cs-s/AHRPTWmipXNUaVQYMESCAxkldNx3To1jug9LDBz_0zB5Q9wBrGgyIByhnaXheN1Ek0bYQcEy4C2kEfHYtIacbLu0qSpomZ7UT5SWcD70GAwliQ3eb4gNXvG-B3mnAxXuD3PWJRbrYNWzgWToc4I"
      ]
    },
    reviews: [
      {
        author: "Venkatesh S",
        rating: "5 stars",
        date: "Recent",
        text: "The best Dosa and Sambar in Concord! Crispy, fresh, served fast and hot. Podi dosa is incredible."
      },
      {
        author: "Sarah L",
        rating: "5 stars",
        date: "Recent",
        text: "Huge portions of aromatic biryani and delightful mango lassi. Very friendly staff and cozy spot."
      }
    ]
  }
];

// Helper: Download a single file
function downloadImage(url, destPath) {
  return new Promise((resolve, reject) => {
    let fullUrl = url.startsWith('//') ? 'https:' + url : url;
    if (!fullUrl.includes('=s') && !fullUrl.includes('=w')) {
      fullUrl += '=s1600';
    }

    const file = fs.createWriteStream(destPath);
    https.get(fullUrl, (response) => {
      if (response.statusCode >= 300 && response.statusCode < 400 && response.headers.location) {
        https.get(response.headers.location, (res2) => {
          res2.pipe(file);
          file.on('finish', () => {
            file.close(() => resolve(destPath));
          });
        }).on('error', err => {
          fs.unlink(destPath, () => {});
          reject(err);
        });
        return;
      }

      if (response.statusCode !== 200) {
        fs.unlink(destPath, () => {});
        return reject(new Error(`Failed to download ${fullUrl}: Status ${response.statusCode}`));
      }

      response.pipe(file);
      file.on('finish', () => {
        file.close(() => resolve(destPath));
      });
    }).on('error', (err) => {
      fs.unlink(destPath, () => {});
      reject(err);
    });
  });
}

async function main() {
  console.log('🚀 Starting Google Maps asset downloader and organizer...\n');

  const masterIndex = [];

  for (const loc of locationsData) {
    console.log(`📍 Processing Location: ${loc.name} (${loc.key})...`);
    const locDir = path.join(OUTPUT_BASE, loc.key);
    fs.mkdirSync(locDir, { recursive: true });

    // Save metadata JSON
    const metaPath = path.join(locDir, 'metadata.json');
    fs.writeFileSync(metaPath, JSON.stringify(loc, null, 2));
    console.log(`   📄 Saved metadata to ${path.relative(process.cwd(), metaPath)}`);

    // Download photos by category
    for (const [catName, urls] of Object.entries(loc.categories)) {
      const catDir = path.join(locDir, catName);
      fs.mkdirSync(catDir, { recursive: true });

      let idx = 1;
      for (const url of urls) {
        const ext = '.jpg';
        const numStr = String(idx).padStart(2, '0');
        const filename = `${loc.key}_${catName}_${numStr}${ext}`;
        const destPath = path.join(catDir, filename);

        try {
          await downloadImage(url, destPath);
          const stats = fs.statSync(destPath);
          console.log(`   ✅ Downloaded [${catName}] -> ${filename} (${(stats.size / 1024).toFixed(1)} KB)`);
          masterIndex.push({
            location: loc.key,
            business: loc.name,
            category: catName,
            filename,
            relativePath: path.relative(OUTPUT_BASE, destPath),
            sizeBytes: stats.size
          });
        } catch (err) {
          console.warn(`   ⚠️ Error downloading ${url}: ${err.message}`);
        }
        idx++;
      }
    }
    console.log('');
  }

  // Generate ASSETS_INDEX.md
  let mdContent = `# 📸 Google Maps Scraped & Organized Asset Ledger\n\n`;
  mdContent += `> Generated on ${new Date().toISOString()}\n`;
  mdContent += `> Total Downloaded Assets: ${masterIndex.length}\n\n`;
  mdContent += `| Location | Category | Organized Filename | File Size | Relative Path |\n`;
  mdContent += `| :--- | :--- | :--- | :--- | :--- |\n`;

  for (const item of masterIndex) {
    const sizeKB = (item.sizeBytes / 1024).toFixed(1) + ' KB';
    mdContent += `| **${item.location.toUpperCase()}** | \`${item.category}\` | \`${item.filename}\` | ${sizeKB} | \`public/assets/images/google_maps/${item.relativePath}\` |\n`;
  }

  const indexPath = path.join(OUTPUT_BASE, 'ASSETS_INDEX.md');
  fs.writeFileSync(indexPath, mdContent);
  console.log(`🎉 Master Asset Ledger generated at: ${path.relative(process.cwd(), indexPath)}`);
}

main().catch(console.error);
