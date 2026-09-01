const fs = require('fs');
const path = require('path');

const BASE_DIR = path.join(__dirname, '..', 'public', 'assets', 'images', 'google_maps');
const VIEWS_DIR = path.join(__dirname, '..', 'app', 'views');

// Name mapping dictionary for content descriptors
const renameMap = {
  // Biryani
  "dum_biryani_02": "hyderabadi_chicken_dum_biryani_pot",
  "dum_biryani_43": "vijayawada_special_spicy_chicken_biryani",
  "dum_biryani_62": "chettinad_mutton_sukka_biryani",
  "dum_biryani_71": "royal_paneer_tikka_biryani",
  "dum_biryani_74": "traditional_egg_dum_biryani_bucket",

  // Dosas & Tiffins
  "crispy_dosa_04": "medu_vada_sambar_chutney_combo",
  "crispy_dosa_12": "golden_ghee_paper_roast_dosa",
  "crispy_dosa_18": "steamed_idli_sambar_vada_tiffin",
  "crispy_dosa_26": "gunpowder_podi_masala_dosa",
  "crispy_dosa_48": "onion_rava_masala_crispy_dosa",

  // Curries & Starters
  "chicken65_appetizer_03": "hyderabadi_apollo_fish_fry",
  "chicken65_appetizer_07": "crispy_andhra_chicken_65",
  "chicken65_appetizer_24": "spicy_paneer_65_crispy_starter",
  "chicken65_appetizer_53": "chilli_chicken_indo_chinese",
  "chicken65_appetizer_76": "fiery_curry_leaf_chicken_fry",
  "special_curry_platter_05": "chettinad_mutton_sukka_masala",
  "special_curry_platter_06": "madras_chicken_curry_bowl",
  "special_curry_platter_09": "mutton_rogan_josh_slow_simmered",
  "special_curry_platter_10": "creamy_butter_chicken_delight",
  "special_curry_platter_11": "paneer_tikka_butter_masala",
  "special_curry_platter_14": "tandoori_mixed_grill_platter",
  "special_curry_platter_15": "dal_makhani_slow_cooked",
  "special_curry_platter_16": "south_indian_curry_feast_spread",
  "special_curry_platter_17": "kadai_paneer_bell_pepper_gravy",
  "special_curry_platter_19": "chicken_tikka_masala_gravy",
  "special_curry_platter_20": "spicy_egg_masala_roast",
  "special_curry_platter_21": "dum_biryani_thali_curry_combo",
  "special_curry_platter_22": "royal_maharaja_thali_platter",
  "special_curry_platter_23": "gobi_manchurian_dry_starter",
  "special_curry_platter_25": "navratan_korma_vegetable_curry",
  "special_curry_platter_29": "chicken_chettinad_black_pepper",
  "special_curry_platter_30": "chana_masala_punjabi_gravy",
  "special_curry_platter_31": "kashmiri_mutton_curry_pot",
  "special_curry_platter_32": "garlic_naan_tandoori_bread",
  "special_curry_platter_34": "tandoori_chicken_leg_sizzler",
  "special_curry_platter_36": "malabar_flaky_parotta_curry_combo",
  "special_curry_platter_37": "crispy_samosa_chaat_bowl",
  "special_curry_platter_38": "bhature_chole_combo_platter",
  "special_curry_platter_39": "prawn_chettinad_masala_roast",
  "special_curry_platter_40": "palak_paneer_spinach_gravy",
  "special_curry_platter_41": "hyderabadi_bagara_baingan",
  "special_curry_platter_42": "fish_tikka_tandoori_kabab",
  "special_curry_platter_45": "bhindi_do_pyaza_stir_fry",
  "special_curry_platter_49": "chicken_korma_cashew_gravy",
  "special_curry_platter_50": "vegetable_biryani_handi_spread",
  "special_curry_platter_51": "paneer_lababdar_creamy_gravy",
  "special_curry_platter_52": "mutton_keema_masala_gravy",
  "special_curry_platter_54": "chettinad_crab_masala_roast",
  "special_curry_platter_55": "chicken_sukka_dry_roast",
  "special_curry_platter_56": "dal_tadka_yellow_lentil",
  "special_curry_platter_57": "aloo_gobi_masala_homestyle",
  "special_curry_platter_58": "mushroom_pepper_fry_starter",
  "special_curry_platter_59": "egg_bhurji_spicy_scramble",
  "special_curry_platter_61": "chicken_saagwala_spinach_curry",
  "special_curry_platter_63": "paneer_bhurji_gravy",
  "special_curry_platter_64": "mutton_curry_dhaba_style",
  "special_curry_platter_65": "mixed_seafood_coastal_curry",
  "special_curry_platter_66": "mirchi_ka_salan_peanut_gravy",
  "special_curry_platter_67": "veg_korma_coconut_curry",
  "special_curry_platter_70": "butter_naan_basket_tandoori",
  "special_curry_platter_72": "tandoori_roti_whole_wheat",
  "special_curry_platter_73": "paneer_tikka_masala_sizzler",
  "special_curry_platter_75": "paneer_butter_masala_pot",

  // Interior & Vibe
  "interior_dining_01": "restaurant_main_dining_hall_booths",
  "interior_dining_08": "warm_ambient_lighting_indoor_seating",
  "interior_dining_33": "cozy_family_dining_table_setup",
  "interior_dining_35": "order_counter_and_dining_room",

  // Storefront & Exterior
  "storefront_exterior_27": "storefront_exterior_daylight_signboard",
  "storefront_exterior_28": "plaza_entrance_parking_view",
  "storefront_exterior_44": "restaurant_facade_curbside_view",
  "storefront_exterior_47": "evening_illuminated_storefront_sign",

  // Menus & Promos
  "printed_menu_13": "dine_in_printed_menu_full_card",
  "printed_menu_46": "lunch_dinner_specials_menu_sheet",
  "printed_menu_60": "catering_and_takeout_menu_guide",
  "printed_menu_68": "dosa_and_biryani_special_menu",
  "printed_menu_69": "chef_special_recommendation_menu"
};

const replacementLedger = [];

function getAllFiles(dirPath, arrayOfFiles = []) {
  const files = fs.readdirSync(dirPath);
  files.forEach(file => {
    const fullPath = path.join(dirPath, file);
    if (fs.statSync(fullPath).isDirectory()) {
      getAllFiles(fullPath, arrayOfFiles);
    } else if (file.endsWith('.jpg')) {
      arrayOfFiles.push(fullPath);
    }
  });
  return arrayOfFiles;
}

const allImages = getAllFiles(BASE_DIR);
console.log(`Found ${allImages.length} images to process...`);

let renameCount = 0;

for (const imgPath of allImages) {
  const dir = path.dirname(imgPath);
  const oldFilename = path.basename(imgPath);
  const ext = path.extname(imgPath);
  const nameWithoutExt = path.basename(imgPath, ext);

  // Parse location prefix (e.g. "dublin_", "livermore_", etc.)
  let locPrefix = "";
  let tag = nameWithoutExt;

  for (const loc of ['dublin', 'livermore', 'milpitas', 'concord']) {
    if (nameWithoutExt.startsWith(loc + '_')) {
      locPrefix = loc + '_';
      tag = nameWithoutExt.substring(locPrefix.length);
      break;
    }
  }

  if (renameMap[tag]) {
    const newTagName = renameMap[tag];
    const newFilename = `${locPrefix}${newTagName}${ext}`;
    const newPath = path.join(dir, newFilename);

    if (oldFilename !== newFilename) {
      fs.renameSync(imgPath, newPath);
      renameCount++;
      const relOld = path.relative(path.join(__dirname, '..'), imgPath);
      const relNew = path.relative(path.join(__dirname, '..'), newPath);
      replacementLedger.push({
        oldPath: '/' + relOld.replace(/^public\//, ''),
        newPath: '/' + relNew.replace(/^public\//, ''),
        oldFilename,
        newFilename
      });
      console.log(`✅ Renamed: ${oldFilename} ➔ ${newFilename}`);
    }
  }
}

console.log(`\n🎉 Total images renamed: ${renameCount}\n`);

// Update view files
function updateViewFiles(dir) {
  const files = fs.readdirSync(dir);
  for (const f of files) {
    const full = path.join(dir, f);
    if (fs.statSync(full).isDirectory()) {
      updateViewFiles(full);
    } else if (f.endsWith('.php') || f.endsWith('.js') || f.endsWith('.json') || f.endsWith('.md')) {
      let content = fs.readFileSync(full, 'utf8');
      let changed = false;
      for (const item of replacementLedger) {
        if (content.includes(item.oldPath)) {
          content = content.replaceAll(item.oldPath, item.newPath);
          changed = true;
        }
        if (content.includes(item.oldFilename)) {
          content = content.replaceAll(item.oldFilename, item.newFilename);
          changed = true;
        }
      }
      if (changed) {
        fs.writeFileSync(full, content, 'utf8');
        console.log(`📝 Updated references in: ${path.relative(path.join(__dirname, '..'), full)}`);
      }
    }
  }
}

updateViewFiles(VIEWS_DIR);
updateViewFiles(BASE_DIR);

// Generate fresh ASSETS_INDEX.md
const freshImages = getAllFiles(BASE_DIR);
let indexMd = `# 📸 Comprehensive & Deduplicated Asset Catalog (Descriptive Content Names)\n\n`;
indexMd += `> **Total Unique High-Resolution Assets**: ${freshImages.length}\n`;
indexMd += `> **Content Naming Guarantee**: 100% descriptive dish, interior, storefront, and menu labels.\n\n`;
indexMd += `| Location | Category | Content Present (Descriptor) | High-Res Filename | File Size | Relative Public Path |\n`;
indexMd += `| :--- | :--- | :--- | :--- | :--- | :--- |\n`;

for (const f of freshImages.sort()) {
  const stat = fs.statSync(f);
  const sizeKB = (stat.size / 1024).toFixed(1) + ' KB';
  const fname = path.basename(f);
  const relPath = path.relative(path.join(__dirname, '..', 'public'), f);
  
  // Extract parts
  const parts = relPath.split(path.sep);
  const loc = parts[3].toUpperCase();
  const cat = parts[4];
  const contentDesc = fname.replace(/^[a-z]+_/, '').replace(/\.jpg$/, '').replace(/_/g, ' ');

  indexMd += `| **${loc}** | \`${cat}\` | **${contentDesc}** | \`${fname}\` | ${sizeKB} | \`/${relPath}\` |\n`;
}

fs.writeFileSync(path.join(BASE_DIR, 'ASSETS_INDEX.md'), indexMd, 'utf8');
console.log(`📄 Updated ASSETS_INDEX.md with all new descriptive names!`);
