const fs = require('fs');
const path = require('path');

const UNIFIED_MENU_PATH = path.join(__dirname, '..', 'old_website_data', 'data', 'unified_menu.json');
const MENU_VIEW_PATH = path.join(__dirname, '..', 'app', 'views', 'menu', 'index.php');

const rawUnified = JSON.parse(fs.readFileSync(UNIFIED_MENU_PATH, 'utf8'));

// Build Curated South Indian Menu for the interactive book
const featuredItems = [
  {
    titleLine1: "Vijayawada Special",
    titleLine2: "Chicken Biryani",
    titleWords: ["Vijayawada", "Special", "Biryani"],
    titleClass: "is-medium-title",
    menu: "Biryanis",
    date: "Royal Dum",
    label: "Chef Signature",
    desc: "Aromatic basmati rice tossed with rich whole spices, topped with spicy boneless chicken gravy cooked in traditional Andhra style. Served with cooling raitha and mirchi ka salan.",
    image: "/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg",
    title: "Vijayawada Special Chicken Biryani",
    price: "$15.99"
  },
  {
    titleLine1: "Ghee Paper",
    titleLine2: "Roast Dosa",
    titleWords: ["Ghee", "Paper", "Roast"],
    titleClass: "is-medium-title",
    menu: "Dosas",
    date: "Crispy Tiffin",
    label: "Customer Favorite",
    desc: "Crispy, golden-brown wafer thin fermented rice and lentil crepe roasted with pure desi ghee. Served with freshly ground coconut, tomato, and coriander chutneys and steaming vegetable sambar.",
    image: "/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg",
    title: "Ghee Paper Roast Dosa",
    price: "$13.99"
  },
  {
    titleLine1: "Authentic Andhra",
    titleLine2: "Chicken 65",
    titleWords: ["Andhra", "Chicken", "65"],
    titleClass: "is-short-title",
    menu: "Appetizers",
    date: "Starters",
    label: "Fiery Special",
    desc: "Crispy fried boneless chicken tossed with fresh curry leaves, mustard seeds, crushed black pepper, and fiery green chillies.",
    image: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_07.jpg",
    title: "Andhra Chicken 65",
    price: "$13.99"
  },
  {
    titleLine1: "Chettinad Mutton",
    titleLine2: "Sukka Fry",
    titleWords: ["Chettinad", "Mutton", "Sukka"],
    titleClass: "is-medium-title",
    menu: "Appetizers",
    date: "Chettinad",
    label: "House Heritage",
    desc: "Tender boneless goat pieces slow-roasted in freshly ground Chettinad spices, black pepper, and caramelized shallots.",
    image: "/assets/images/google_maps/milpitas/curries_and_appetizers/milpitas_special_curry_platter_05.jpg",
    title: "Chettinad Mutton Sukka",
    price: "$16.99"
  },
  {
    titleLine1: "Flaky Layered",
    titleLine2: "Malabar Parotta",
    titleWords: ["Malabar", "Parotta", "Tiffin"],
    titleClass: "is-medium-title",
    menu: "Breads",
    date: "Tiffin",
    label: "Authentic Bread",
    desc: "Multi-layered, flaky, golden flatbread grilled on hot iron tawa. The perfect accompaniment to spicy curries and gravies.",
    image: "/assets/images/google_maps/livermore/curries_and_appetizers/livermore_special_curry_platter_36.jpg",
    title: "Malabar Parotta (2 pcs)",
    price: "$6.99"
  },
  {
    titleLine1: "Madras Brass",
    titleLine2: "Filter Coffee",
    titleWords: ["Madras", "Filter", "Coffee"],
    titleClass: "is-short-title",
    menu: "Beverages",
    date: "Traditional",
    label: "Classic Finish",
    desc: "Strong chicory-infused coffee decoction frothed with boiling whole milk, served traditionally in a brass davarah and tumbler.",
    image: "/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg",
    title: "Madras Filter Coffee",
    price: "$4.50"
  }
];

// Build Menu Book for interactive menu viewer
const menuBooks = {
  biryanis: {
    tabTitle: "ROYAL BIRYANIS",
    ctaText: "Dum Specialties",
    showPages: true,
    showImages: true,
    intro: {
      title: "Royal Dum Biryanis",
      subtitle: "Slow-Cooked Sealed Pots",
      description: "Our signature dum biryanis are prepared with long-grain aged basmati rice, saffron, and freshly ground whole spices sealed in handis."
    },
    spreads: [
      {
        kicker: "Biryani Collection",
        left: {
          label: "Non-Veg Dum",
          pageNo: "Page 01",
          title: "Chicken & Mutton Biryanis",
          compact: false,
          items: [
            { id: "b1", title: "Hyderabadi Chicken Dum Biryani", desc: "Aged basmati slow-cooked with spiced chicken and saffron.", price: "$14.99", image: "/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg", detailTitle: "Hyderabadi Chicken Dum Biryani", detailPrice: "$14.99", detailDescription: "Layered basmati rice and marinated chicken cooked on slow charcoal dum with mint, saffron, and whole spices." },
            { id: "b2", title: "Vijayawada Special Chicken Biryani", desc: "Spiced biryani rice topped with wok-tossed boneless chicken.", price: "$15.99", image: "/assets/images/google_maps/livermore/biryani_specials/livermore_dum_biryani_02.jpg", detailTitle: "Vijayawada Special Chicken Biryani", detailPrice: "$15.99", detailDescription: "Fragrant rice served with fiery Andhra boneless chicken gravy, fried cashews, and fresh cilantro." },
            { id: "b3", title: "Goat Dum Biryani", desc: "Tender bone-in goat slow-cooked with aromatic garam masala.", price: "$16.99", image: "/assets/images/google_maps/milpitas/biryani_specials/milpitas_dum_biryani_02.jpg", detailTitle: "Goat Dum Biryani", detailPrice: "$16.99", detailDescription: "Succulent pieces of goat meat marinated in yogurt and spices, layered with saffron basmati rice." }
          ]
        },
        right: {
          label: "Vegetarian Dum",
          pageNo: "Page 02",
          title: "Vegetarian & Family Buckets",
          compact: false,
          items: [
            { id: "b4", title: "Paneer Dum Biryani", desc: "Fresh cottage cheese cubes marinated in tandoori spices and cooked with rice.", price: "$14.49", image: "/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg", detailTitle: "Paneer Dum Biryani", detailPrice: "$14.49", detailDescription: "Marinated paneer cooked on dum with aged basmati, fried onions, and whole spices." },
            { id: "b5", title: "Vegetable Dum Biryani", desc: "Assorted fresh seasonal vegetables slow-cooked with aromatic basmati.", price: "$13.49", image: "/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg", detailTitle: "Vegetable Dum Biryani", detailPrice: "$13.49", detailDescription: "Carrots, beans, potatoes, and peas gently spiced and layered with fragrant basmati." },
            { id: "b6", title: "Mutton Sukka Biryani Family Pack", desc: "Generous bucket serving 4-5 guests with raitha and salan.", price: "$36.99", image: "/assets/images/google_maps/milpitas/biryani_specials/milpitas_dum_biryani_02.jpg", detailTitle: "Mutton Sukka Family Pack", detailPrice: "$36.99", detailDescription: "Large party bucket of Chettinad Mutton Sukka Biryani served with eggs, appetizers, raitha, and gravy." }
          ]
        }
      }
    ]
  },
  dosas: {
    tabTitle: "CHENNAI DOSAS",
    ctaText: "Crispy Tiffins",
    showPages: true,
    showImages: true,
    intro: {
      title: "Chennai Dosa Collection",
      subtitle: "Cast-Iron Tawa Specialties",
      description: "Naturally fermented stone-ground batter swirled thin on smoking hot cast-iron tawas and roasted to golden crisp perfection."
    },
    spreads: [
      {
        kicker: "Dosa & Tiffin Menu",
        left: {
          label: "Classic Dosas",
          pageNo: "Page 01",
          title: "Crispy Crepes",
          compact: false,
          items: [
            { id: "d1", title: "Ghee Paper Roast Dosa", desc: "Crisp golden crepe roasted with pure desi ghee.", price: "$13.99", image: "/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg", detailTitle: "Ghee Paper Roast Dosa", detailPrice: "$13.99", detailDescription: "Large golden crispy dosa roasted in pure ghee, served with chutney trio and sambar." },
            { id: "d2", title: "Mysore Masala Dosa", desc: "Spiced red garlic chutney smeared inside and filled with potato masala.", price: "$14.49", image: "/assets/images/google_maps/milpitas/dosas_and_tiffin/milpitas_crispy_dosa_04.jpg", detailTitle: "Mysore Masala Dosa", detailPrice: "$14.49", detailDescription: "Crispy crepe coated with spicy red chutney, stuffed with seasoned mashed potatoes." },
            { id: "d3", title: "Onion Rava Masala Dosa", desc: "Crispy lacy semolina crepe studded with onions, ginger, and green chillies.", price: "$14.99", image: "/assets/images/google_maps/concord/dosas_and_tiffin/concord_crispy_dosa_04.jpg", detailTitle: "Onion Rava Masala Dosa", detailPrice: "$14.99", detailDescription: "Lacy, ultra-crispy crepe made from semolina and rice flour, filled with spiced potato masala." }
          ]
        },
        right: {
          label: "Tiffins & Combos",
          pageNo: "Page 02",
          title: "Idli, Vada & Specials",
          compact: false,
          items: [
            { id: "d4", title: "Podi Masala Dosa", desc: "Dusted with spicy gunpowder (karam podi) and pure ghee.", price: "$14.49", image: "/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_26.jpg", detailTitle: "Podi Masala Dosa", detailPrice: "$14.49", detailDescription: "Traditional Chennai style podi dosa with a spicy roasted lentil powder crust." },
            { id: "d5", title: "Medu Vada (3 pcs)", desc: "Crispy golden lentil doughnuts served with hot sambar and chutneys.", price: "$8.99", image: "/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_04.jpg", detailTitle: "Medu Vada", detailPrice: "$8.99", detailDescription: "Crisp outside and fluffy inside savory doughnuts made from urad dal batter." },
            { id: "d6", title: "Steamed Idli Sambar (3 pcs)", desc: "Pillow-soft steamed rice cakes dipped in hot aromatic vegetable sambar.", price: "$8.99", image: "/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_18.jpg", detailTitle: "Steamed Idli Sambar", detailPrice: "$8.99", detailDescription: "Steamed fermented rice and lentil cakes served with freshly ground coconut chutney and sambar." }
          ]
        }
      }
    ]
  },
  curries: {
    tabTitle: "CURRIES & STARTERS",
    ctaText: "Rich Gravies & Starters",
    showPages: true,
    showImages: true,
    intro: {
      title: "Curries & Starters",
      subtitle: "Chettinad & Mughlai Flavors",
      description: "Richly spiced gravies and sizzling appetizers made with fresh stone-ground spice masalas."
    },
    spreads: [
      {
        kicker: "Curries & Appetizers",
        left: {
          label: "Appetizers",
          pageNo: "Page 01",
          title: "Sizzling Starters",
          compact: false,
          items: [
            { id: "c1", title: "Chicken 65", desc: "Fiery crispy chicken tossed with curry leaves and green chillies.", price: "$13.99", image: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_07.jpg", detailTitle: "Chicken 65", detailPrice: "$13.99", detailDescription: "Classic Andhra appetizer prepared with marinated chicken, ginger-garlic, and spices." },
            { id: "c2", title: "Apollo Fish", desc: "Crispy boneless fish fillets seasoned with curry leaves and yogurt sauce.", price: "$15.99", image: "/assets/images/google_maps/livermore/curries_and_appetizers/livermore_chicken65_appetizer_03.jpg", detailTitle: "Apollo Fish", detailPrice: "$15.99", detailDescription: "Hyderabadi street style crispy fish tossed in a tangy tempered spice blend." },
            { id: "c3", title: "Paneer 65", desc: "Crispy spiced cottage cheese cubes tossed with bell peppers and onions.", price: "$12.99", image: "/assets/images/google_maps/livermore/curries_and_appetizers/livermore_chicken65_appetizer_07.jpg", detailTitle: "Paneer 65", detailPrice: "$12.99", detailDescription: "Crispy golden paneer cubes tossed in house specialty red spice mix." }
          ]
        },
        right: {
          label: "Curries & Gravies",
          pageNo: "Page 02",
          title: "Royal Gravies",
          compact: false,
          items: [
            { id: "c4", title: "Madras Chicken Curry", desc: "Traditional Tamil chicken curry with coconut milk, curry leaves, and black pepper.", price: "$13.99", image: "/assets/images/google_maps/milpitas/curries_and_appetizers/milpitas_special_curry_platter_05.jpg", detailTitle: "Madras Chicken Curry", detailPrice: "$13.99", detailDescription: "Aromatic South Indian chicken curry simmered in fresh tomato, onion, and roasted spices." },
            { id: "c5", title: "Butter Chicken", desc: "Tandoori chicken pieces simmered in a silky tomato, butter, and cream gravy.", price: "$14.99", image: "/assets/images/google_maps/livermore/curries_and_appetizers/livermore_special_curry_platter_36.jpg", detailTitle: "Butter Chicken", detailPrice: "$14.99", detailDescription: "Classic rich Mughlai butter chicken with fenugreek leaves (kasuri methi)." },
            { id: "c6", title: "Paneer Butter Masala", desc: "Cottage cheese cubes cooked in a rich, buttery tomato sauce.", price: "$13.99", image: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_75.jpg", detailTitle: "Paneer Butter Masala", detailPrice: "$13.99", detailDescription: "Soft paneer simmered in creamy cashew and tomato gravy." }
          ]
        }
      }
    ]
  }
};

let menuViewContent = fs.readFileSync(MENU_VIEW_PATH, 'utf8');

// Replace page title
menuViewContent = menuViewContent.replace(/<title>.*?<\/title>/, '<title>The Menu | Biryani Spot Chennai Dosa</title>');

// Replace data-featured JSON
const featuredJsonEscaped = JSON.stringify(featuredItems).replace(/"/g, '&quot;');
menuViewContent = menuViewContent.replace(/data-featured="\[.*?\]"/s, `data-featured="${featuredJsonEscaped}"`);

// Replace data-books JSON
const booksJsonEscaped = JSON.stringify(menuBooks).replace(/"/g, '&quot;');
menuViewContent = menuViewContent.replace(/data-books="\{.*?\}"/s, `data-books="${booksJsonEscaped}"`);

// Replace Khufu names & labels
menuViewContent = menuViewContent.replace(/Khufu&#039;s Breakfast/g, 'Vijayawada Special');
menuViewContent = menuViewContent.replace(/Khufu's Breakfast/g, 'Vijayawada Special');
menuViewContent = menuViewContent.replace(/Khufu’s/g, 'Biryani Spot Chennai Dosa');
menuViewContent = menuViewContent.replace(/Khufu's/g, 'Biryani Spot Chennai Dosa');

fs.writeFileSync(MENU_VIEW_PATH, menuViewContent, 'utf8');
console.log('✅ Updated app/views/menu/index.php with authentic South Indian dishes, prices, and high-res photography!');
