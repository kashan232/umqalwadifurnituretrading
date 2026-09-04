@extends('frontend.layouts.master')
@section('title','UMQ AL WADI FURNITURE TRADING')
@section('main-content')
<style>
    /* Floating Action Buttons */
    .single-product .product-img .button-head {
        background: transparent !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        position: absolute !important;
        bottom: 15px !important;
        left: 0 !important;
        width: 100% !important;
        border: none !important;
        z-index: 9 !important;
    }
    
    .single-product .product-action {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        float: none !important;
    }

    .single-product .product-action a {
        color: #333 !important;
        font-size: 18px !important;
        margin: 0 5px !important;
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        background: #fff !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    .single-product .product-action a:hover {
        background: #036b41 !important;
        color: #fff !important;
    }
    .single-product .product-action a i {
        margin: 0 !important;
        padding: 0 !important;
    }
    .list-main {
        display: flex;
        flex-wrap: wrap;
        /* prevent overflow on small screens */
        align-items: center;
        gap: 10px;
        /* space between items */
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .product-area .nav-tabs {
    text-align: center;
    display: flex;
    flex-wrap: wrap; /* responsive me wrap hon */
    justify-content: center;
    gap: 10px; /* buttons ke beech spacing */
    border: none;
}

.product-area .nav-tabs li {
    list-style: none;
}

.product-area .nav-tabs li button {
    padding: 8px 16px; /* andar ki spacing */
    border: none;
    background: #f5f5f5;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-area .nav-tabs li button:hover,
.product-area .nav-tabs li button.active {
    background: #4ba064;
    color: #fff;
}


    .list-main li {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #333;
    }

    .list-main li i {
        margin-right: 5px;
        color: #000;
    }

    /* Make links inline and clean */
    .list-main li a {
        text-decoration: none;
        color: #000;
        font-weight: 500;
    }

    .list-main li a:hover {
        color: #4ba064;
        /* your brand color */
    }

    /* Optional: tweak spacing for small screens */
    @media (max-width: 576px) {
        .list-main {
            justify-content: center;
            gap: 15px;
        }
    }


    /* Professional Category Cards */
    .single-banner {
        position: relative;
        overflow: hidden;
        border-radius: 8px; /* Slightly rounded corners */
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1); /* Soft shadow */
        height: 400px; /* Force uniform height across all single-banners */
    }

    .single-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .single-banner:hover img {
        transform: scale(1.08); /* Zoom effect on hover */
    }

    /* Elegant gradient overlay */
    .single-banner::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(3, 107, 65, 0.7) 100%); /* Greenish dark gradient matching theme */
        z-index: 1;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .single-banner:hover::after {
        opacity: 0.95;
    }

    /* Content styling */
    .single-banner .content {
        position: absolute;
        bottom: 30px; /* Position from bottom instead of center */
        top: auto;
        left: 30px;
        right: 30px;
        transform: none;
        text-align: center;
        color: #fff;
        z-index: 2; /* above overlay */
    }

    .single-banner .content h3 {
        font-family: 'Orbitron', sans-serif;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 15px;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    
    .single-banner .content a {
        display: inline-block;
        padding: 10px 25px;
        background-color: #fff;
        color: #036b41; /* Theme green */
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.2);
    }

    .single-banner .content a:hover {
        background-color: #036b41;
        color: #fff;
        border: 1px solid #fff;
    }

    @media (max-width: 768px) {

        .single-product .product-content h3 a {
            font-size: 22px !important;
        }

        .single-product .product-content .product-price span {
            font-size: 22px !important;
        }

        .single-product .product-content .product-price del {
            font-size: 16px !important;
        }

        #Gslider .carousel-inner {
            height: auto !important;
        }

        #Gslider .carousel-inner img {
            height: 100vh;
            /* full mobile height */
            object-fit: cover;
            object-position: right center;
            /* or left center if needed */
        }

        .header.shop .list-main li i {
            color: #036b41;
        }

        .header.shop .top-left .list-main li i {
            color: #036b41;
            font-size: 10px;
        }

        .header.shop .list-main li a {
            font-size: 12px;
        }

        .top-left {
            display: none;
        }

        .logo img {
            width: 80px;
        }
    }

    @media (max-width: 480px) {
        .single-product .product-content h3 a {
            font-size: 20px !important;
        }

        .single-product .product-content .product-price span {
            font-size: 20px !important;
        }

        .single-product .product-content .product-price del {
            font-size: 14px !important;
        }

        #Gslider .carousel-inner {
            height: auto !important;
        }

        .header.shop .list-main li i {
            color: #036b41;
        }

        .header.shop .top-left .list-main li i {
            color: #036b41;
            font-size: 10px;
        }

        .header.shop .list-main li a {
            font-size: 12px;
        }

        .logo img {
            width: 80px;
        }
    }
    /* Midium Banner (Featured Products) Redesign */
    .midium-banner {
        padding: 60px 0 !important;
    }
    .midium-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .midium-banner .single-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05);
    }
    .midium-banner .single-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%);
        z-index: 1;
    }
    .midium-banner .single-banner .content {
        position: absolute;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2;
        text-align: left !important;
        padding: 0 !important;
        width: 80%;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        background: #036b41;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 4px;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; text-decoration: underline; /* Make discount pop, or use a distinct green/yellow */
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        text-shadow: none !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px);
    }
    /* Uniform Product Card Heights */
    .single-product {
        height: 100%;
        display: flex;
        
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        padding-top: 120%; /* Enforce a fixed aspect ratio for images */
        background: #fff;
        overflow: hidden;
    }
    .single-product .product-img a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-height: 100%;
        width: auto !important;
        max-width: 100%;
        object-fit: contain;
    }
    .single-product .product-content {
        flex-grow: 1;
        display: flex;
        
        justify-content: flex-end;
    }

    /* Fix Card Heights and Image Contain */
    .single-product {
        height: 100%;
        display: flex;
        
        justify-content: space-between;
        background: #fff;
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        height: 300px; /* Fixed height for all images */
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .single-product .product-img a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important;
        object-fit: contain;
    }
    .single-product .product-content {
        padding-top: 15px;
    }

    /* Perfect Global Section Padding */
    .section {
        padding: 70px 0 !important;
    }
    .section-title {
        margin-bottom: 50px !important;
    }
    .small-banner.section {
        padding: 40px 0 !important;
    }
    .midium-banner {
        padding: 70px 0 !important;
    }
    /* Add Padding to Product Images inside Cards */
    .single-product .product-img {
        padding: 20px !important;
    }
    
    /* Better Design for Slider Navigation Arrows */
    .owl-carousel .owl-nav {
        margin-top: 30px !important;
        text-align: center;
    }
    .owl-carousel .owl-nav div {
        background: #036b41 !important;
        color: #fff !important;
        width: 45px !important;
        height: 45px !important;
        
        text-align: center;
        border-radius: 50% !important;
        font-size: 20px !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 10px !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .owl-carousel .owl-nav div:hover {
        background: #222 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .owl-carousel .owl-nav div i {
        
    }
    /* Fix Slider Icon Alignment */
    .owl-carousel .owl-nav div {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        line-height: normal !important;
        padding: 0 !important;
    }
    .owl-carousel .owl-nav div i {
        line-height: normal !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }
    /* Premium Small Banner Design for White-Background Products */
    .small-banner .single-banner {
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        mix-blend-mode: multiply; /* Magically removes the white background */
        transition: transform 0.5s ease;
        opacity: 0.85; /* Blend nicely with the text */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 1;
    }
    .small-banner .single-banner .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        
        align-items: center;
        justify-content: flex-end;
        text-align: center;
        z-index: 2;
        padding-bottom: 30px;
        background: linear-gradient(to top, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 50%);
    }
    .small-banner .single-banner .content h3 {
        color: #023a23 !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 22px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px !important;
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 10px 25px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 13px !important;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .small-banner .single-banner .content a:hover {
        background: #023a23 !important;
        transform: translateY(-3px);
    }
    /* Fixing the Small Banner Content Alignment */
    .small-banner .single-banner .content {
        position: absolute !important;
        top: auto !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: flex-end !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 0 !important;
        padding-bottom: 20px !important;
        background: transparent !important;
    }
    /* We add a separate pseudo element for the gradient so it doesn't mess with flex */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 50% !important;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
    }
    .small-banner .single-banner h3, 
    .small-banner .single-banner a {
        position: relative !important;
        z-index: 3 !important;
    }
    /* Sleek Lifestyle Category Banners */
    .small-banner .single-banner {
        background: #000;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
        opacity: 0.7; /* Darken image slightly so text is readable */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 0.5;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner::before {
        display: none !important; /* Remove any previously added gradients */
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 14px !important;
        letter-spacing: 1.5px;
        transition: all 0.3s ease !important;
        border: 2px solid transparent !important;
    }
    .small-banner .single-banner .content a:hover {
        background: transparent !important;
        border: 2px solid #fff !important;
        transform: translateY(-3px);
    }
    /* Restore to the Elegant White-on-Green Lifestyle Design */
    .small-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
    }
    /* The soft green gradient overlay */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(3,107,65,0.7) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
        display: block !important;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif !important;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        letter-spacing: 2px !important;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
    }
    .small-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        padding: 12px 30px !important;
        border-radius: 4px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        font-size: 14px !important;
        letter-spacing: 1.5px !important;
        transition: all 0.3s ease !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    }
    .small-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
    /* Midium Banner (Featured Products) Redesign for White-Background Products */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%) !important;
        display: flex !important;
        align-items: center !important;
    }
    .midium-banner .single-banner::before {
        display: none !important; /* Remove dark overlay */
    }
    .midium-banner .single-banner img {
        width: 50% !important;
        height: 90% !important;
        object-fit: contain !important;
        mix-blend-mode: multiply !important;
        transition: transform 0.5s ease !important;
        position: absolute !important;
        right: 10px !important;
        bottom: 10px !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.1) !important;
    }
    .midium-banner .single-banner .content {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 40px !important;
        width: 60% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 15px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 6px 15px !important;
        border-radius: 30px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #023a23 !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 30px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 25px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #036b41 !important; 
        text-decoration: underline !important; 
    }
    .midium-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(3, 107, 65, 0.3) !important;
        border: 2px solid #036b41 !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: transparent !important;
        color: #036b41 !important;
        transform: translateY(-3px) !important;
    }
    /* Revert Midium Banner to the Original Behtreen Design */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: transparent !important;
        display: block !important;
    }
    .midium-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease !important;
        position: static !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05) !important;
    }
    .midium-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%) !important;
        z-index: 1 !important;
        display: block !important;
    }
    .midium-banner .single-banner .content {
        position: absolute !important;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 0 !important;
        width: 80% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 10px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 4px 12px !important;
        border-radius: 4px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; 
        text-decoration: underline !important;
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        border: none !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
</style>

<!-- Slider Area -->
@if(count($banners)>0)
<section id="Gslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($banners as $key=>$banner)
        <li data-target="#Gslider" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
        @endforeach

    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($banners as $key=>$banner)
        <div class="carousel-item {{(($key==0)? 'active' : '')}}">
            <img class="first-slide" src="{{$banner->photo}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block text-left">
                <h1 class="wow fadeInDown">{{$banner->title}}</h1>
                <p>{!! html_entity_decode($banner->description) !!}</p>
                <a class="btn btn-lg ws-btn wow fadeInUpBig" href="{{route('product-grids')}}" role="button">Shop Now<i class="far fa-arrow-alt-circle-right"></i></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
@endif

<!--/ End Slider Area -->



{{-- @php
    $featured=DB::table('products')->where('is_featured',1)->where('status','active')->orderBy('id','DESC')->limit(1)->get();
@endphp --}}









<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            @php
            $category_lists=DB::table('categories')->where('status','active')->limit(3)->get();
            @endphp
            @if($category_lists)
            @foreach($category_lists as $cat)
            @if($cat->is_parent==1)
            <!-- Single Banner  -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="single-banner">
                    @if($cat->photo)
                    <img src="{{$cat->photo}}" alt="{{$cat->photo}}">
                    @else
                    <img src="https://via.placeholder.com/600x370" alt="#">
                    @endif
                    <div class="content">
                        <h3>{{$cat->title}}</h3>
                        <a href="{{route('product-cat',$cat->slug)}}">Discover Now</a>
                    </div>
                </div>
            </div>
            @endif
            <!-- /End Single Banner  -->
            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Small Banner -->

<!-- Start Shop Services Area -->
<style>
    /* Floating Action Buttons */
    .single-product .product-img .button-head {
        background: transparent !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        position: absolute !important;
        bottom: 15px !important;
        left: 0 !important;
        width: 100% !important;
        border: none !important;
        z-index: 9 !important;
    }
    
    .single-product .product-action {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        float: none !important;
    }

    .single-product .product-action a {
        color: #333 !important;
        font-size: 18px !important;
        margin: 0 5px !important;
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        background: #fff !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    .single-product .product-action a:hover {
        background: #036b41 !important;
        color: #fff !important;
    }
    .single-product .product-action a i {
        margin: 0 !important;
        padding: 0 !important;
    }
    .service-card {
        background: #ffffff;
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        border: 1px solid #f0f0f0;
        position: relative;
        overflow: hidden;
        z-index: 1;
        height: 100%;
    }
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(3, 107, 65, 0.15);
        border-color: #036b41;
    }
    .service-icon-box {
        width: 85px;
        height: 85px;
        background: #eaf3ee;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        transition: all 0.4s ease;
    }
    .service-card:hover .service-icon-box {
        background: #036b41;
        transform: scale(1.1);
    }
    .service-icon-box i {
        font-size: 38px;
        color: #036b41;
        transition: all 0.4s ease;
    }
    .service-card:hover .service-icon-box i {
        color: #ffffff;
    }
    .service-card h4 {
        font-size: 20px;
        font-weight: 700;
        color: #222;
        margin-bottom: 12px;
        text-transform: capitalize;
    }
    .service-card p {
        font-size: 15px;
        color: #666;
        line-height: 1.6;
        margin: 0;
    }
    .service-card::before {
        content: "";
        position: absolute;
        top: -30px;
        right: -30px;
        width: 120px;
        height: 120px;
        background: rgba(3, 107, 65, 0.03);
        border-radius: 50%;
        z-index: -1;
        transition: all 0.4s ease;
    }
    .service-card:hover::before {
        transform: scale(3);
        background: rgba(3, 107, 65, 0.05);
    }
    /* Midium Banner (Featured Products) Redesign */
    .midium-banner {
        padding: 60px 0 !important;
    }
    .midium-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .midium-banner .single-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05);
    }
    .midium-banner .single-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%);
        z-index: 1;
    }
    .midium-banner .single-banner .content {
        position: absolute;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2;
        text-align: left !important;
        padding: 0 !important;
        width: 80%;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        background: #036b41;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 4px;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; text-decoration: underline; /* Make discount pop, or use a distinct green/yellow */
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        text-shadow: none !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px);
    }
    /* Uniform Product Card Heights */
    .single-product {
        height: 100%;
        display: flex;
        
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        padding-top: 120%; /* Enforce a fixed aspect ratio for images */
        background: #fff;
        overflow: hidden;
    }
    .single-product .product-img a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-height: 100%;
        width: auto !important;
        max-width: 100%;
        object-fit: contain;
    }
    .single-product .product-content {
        flex-grow: 1;
        display: flex;
        
        justify-content: flex-end;
    }

    /* Fix Card Heights and Image Contain */
    .single-product {
        height: 100%;
        display: flex;
        
        justify-content: space-between;
        background: #fff;
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        height: 300px; /* Fixed height for all images */
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .single-product .product-img a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important;
        object-fit: contain;
    }
    .single-product .product-content {
        padding-top: 15px;
    }

    /* Perfect Global Section Padding */
    .section {
        padding: 70px 0 !important;
    }
    .section-title {
        margin-bottom: 50px !important;
    }
    .small-banner.section {
        padding: 40px 0 !important;
    }
    .midium-banner {
        padding: 70px 0 !important;
    }
    /* Add Padding to Product Images inside Cards */
    .single-product .product-img {
        padding: 20px !important;
    }
    
    /* Better Design for Slider Navigation Arrows */
    .owl-carousel .owl-nav {
        margin-top: 30px !important;
        text-align: center;
    }
    .owl-carousel .owl-nav div {
        background: #036b41 !important;
        color: #fff !important;
        width: 45px !important;
        height: 45px !important;
        
        text-align: center;
        border-radius: 50% !important;
        font-size: 20px !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 10px !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .owl-carousel .owl-nav div:hover {
        background: #222 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .owl-carousel .owl-nav div i {
        
    }
    /* Fix Slider Icon Alignment */
    .owl-carousel .owl-nav div {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        line-height: normal !important;
        padding: 0 !important;
    }
    .owl-carousel .owl-nav div i {
        line-height: normal !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }
    /* Premium Small Banner Design for White-Background Products */
    .small-banner .single-banner {
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        mix-blend-mode: multiply; /* Magically removes the white background */
        transition: transform 0.5s ease;
        opacity: 0.85; /* Blend nicely with the text */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 1;
    }
    .small-banner .single-banner .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        
        align-items: center;
        justify-content: flex-end;
        text-align: center;
        z-index: 2;
        padding-bottom: 30px;
        background: linear-gradient(to top, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 50%);
    }
    .small-banner .single-banner .content h3 {
        color: #023a23 !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 22px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px !important;
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 10px 25px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 13px !important;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .small-banner .single-banner .content a:hover {
        background: #023a23 !important;
        transform: translateY(-3px);
    }
    /* Fixing the Small Banner Content Alignment */
    .small-banner .single-banner .content {
        position: absolute !important;
        top: auto !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: flex-end !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 0 !important;
        padding-bottom: 20px !important;
        background: transparent !important;
    }
    /* We add a separate pseudo element for the gradient so it doesn't mess with flex */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 50% !important;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
    }
    .small-banner .single-banner h3, 
    .small-banner .single-banner a {
        position: relative !important;
        z-index: 3 !important;
    }
    /* Sleek Lifestyle Category Banners */
    .small-banner .single-banner {
        background: #000;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
        opacity: 0.7; /* Darken image slightly so text is readable */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 0.5;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner::before {
        display: none !important; /* Remove any previously added gradients */
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 14px !important;
        letter-spacing: 1.5px;
        transition: all 0.3s ease !important;
        border: 2px solid transparent !important;
    }
    .small-banner .single-banner .content a:hover {
        background: transparent !important;
        border: 2px solid #fff !important;
        transform: translateY(-3px);
    }
    /* Restore to the Elegant White-on-Green Lifestyle Design */
    .small-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
    }
    /* The soft green gradient overlay */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(3,107,65,0.7) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
        display: block !important;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif !important;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        letter-spacing: 2px !important;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
    }
    .small-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        padding: 12px 30px !important;
        border-radius: 4px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        font-size: 14px !important;
        letter-spacing: 1.5px !important;
        transition: all 0.3s ease !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    }
    .small-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
    /* Midium Banner (Featured Products) Redesign for White-Background Products */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%) !important;
        display: flex !important;
        align-items: center !important;
    }
    .midium-banner .single-banner::before {
        display: none !important; /* Remove dark overlay */
    }
    .midium-banner .single-banner img {
        width: 50% !important;
        height: 90% !important;
        object-fit: contain !important;
        mix-blend-mode: multiply !important;
        transition: transform 0.5s ease !important;
        position: absolute !important;
        right: 10px !important;
        bottom: 10px !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.1) !important;
    }
    .midium-banner .single-banner .content {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 40px !important;
        width: 60% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 15px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 6px 15px !important;
        border-radius: 30px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #023a23 !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 30px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 25px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #036b41 !important; 
        text-decoration: underline !important; 
    }
    .midium-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(3, 107, 65, 0.3) !important;
        border: 2px solid #036b41 !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: transparent !important;
        color: #036b41 !important;
        transform: translateY(-3px) !important;
    }
    /* Revert Midium Banner to the Original Behtreen Design */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: transparent !important;
        display: block !important;
    }
    .midium-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease !important;
        position: static !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05) !important;
    }
    .midium-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%) !important;
        z-index: 1 !important;
        display: block !important;
    }
    .midium-banner .single-banner .content {
        position: absolute !important;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 0 !important;
        width: 80% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 10px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 4px 12px !important;
        border-radius: 4px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; 
        text-decoration: underline !important;
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        border: none !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
</style>

<section class="shop-services section home" style="background-color: #f7f9fb; padding: 100px 0;">
    <div class="container">
<div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="margin-bottom: 60px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px; display:block; margin-bottom: 10px;">Our Core Values</span>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 36px; font-weight: 800; color: #111; margin-top: 5px;">Why Choose <span style="color: #036b41;">Us</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-rocket"></i>
                    </div>
                    <h4>Free Shipping</h4>
                    <p>On all orders over Rs: 1000</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-reload"></i>
                    </div>
                    <h4>7 Days Return</h4>
                    <p>Original box required</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-lock"></i>
                    </div>
                    <h4>Secure Payment</h4>
                    <p>100% secure payment</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="service-card text-center">
                    <div class="service-icon-box">
                        <i class="ti-tag"></i>
                    </div>
                    <h4>Best Price</h4>
                    <p>Guaranteed best prices</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->

<!-- Start About Us Section -->
<section class="about-us-section section" style="background-color: #fbfbfb; padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="about-content" style="padding-right: 30px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Discover Our Story</span>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 38px; font-weight: 800; margin: 15px 0 25px; color: #222; line-height: 1.3;">Welcome to <br> <span style="color: #036b41;">UMQ AL WADI</span></h2>
                    <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 20px;">
                        We are passionate about transforming ordinary spaces into inspiring environments. With a commitment to quality craftsmanship and modern design, our curated collection of premium home furniture, ergonomic office setups, and high-performance gaming chairs is tailored to elevate your lifestyle and workspace.
                    </p>
                    <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 35px;">
                        Our mission is to provide exceptional value and unparalleled comfort. Every piece in our store is selected with extreme care to ensure durability, standout style, and absolute satisfaction for our customers.
                    </p>
                    <a href="{{route('about-us')}}" class="btn ws-btn" style="background-color: #036b41; color: #fff; padding: 14px 35px; border-radius: 4px; text-transform: uppercase; font-weight: 600; letter-spacing: 1.5px; transition: all 0.3s ease; display: inline-block;">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 mt-5 mt-lg-0">
                <div class="about-image position-relative" style="padding-left: 20px;">
                    <!-- Real Store Image (Portrait) -->
                    <img src="{{asset('about_us_store.jpg')}}" alt="UMQ AL WADI Store" style="width: 100%; aspect-ratio: 3/4; object-fit: cover; border-radius: 12px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                    
                    <!-- Decorative Badge -->
                    <div class="experience-badge" style="position: absolute; bottom: -30px; left: -10px; background: #036b41; color: white; padding: 25px 30px; border-radius: 8px; box-shadow: 0 10px 20px rgba(3, 107, 65, 0.4); text-align: center; border: 3px solid #fff;">
                        <h3 style="font-size: 36px; font-weight: 800; color: #fff; margin: 0;">100%</h3>
                        <span style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Quality<br>Guaranteed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Section -->

<!-- Start Midium Banner  -->
<section class="midium-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="margin-bottom: 50px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Exclusive Collection</span>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Featured <span style="color: #036b41;">Items</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if($featured)
            @foreach($featured as $data)
            <!-- Single Banner  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner">
                    @php
                    $photo=explode(',',$data->photo);
                    @endphp
                    <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                    <div class="content">
                        <p>{{$data->cat_info['title']}}</p>
                        <h3>{{$data->title}} <br>Up to<span> {{$data->discount}}%</span></h3>
                        <a href="{{route('product-detail',$data->slug)}}">Shop Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
<div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="margin-bottom: 50px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Top Picks</span>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Featured <span style="color: #036b41;">Products</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    @foreach($product_lists as $product)
                    @if($product->condition=='hot')
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product-detail',$product->slug)}}">
                                @php
                                $photo=explode(',',$product->photo);
                                // dd($photo);
                                @endphp
                                <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                {{-- <span class="out-of-stock">Hot</span> --}}
                            </a>
                            <div class="button-head">
                                <div class="product-action d-flex justify-content-center align-items-center w-100">
                                            <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                            <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                            <div class="product-price">
                                <span class="old">Rs:{{number_format($product->price,2)}}</span>
                                @php
                                $after_discount=($product->price-($product->price*$product->discount)/100)
                                @endphp
                                <span>Rs:{{number_format($after_discount,2)}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Shop Home List  -->
<section class="shop-home-list section">
    <div class="container">
<div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center" style="margin-bottom: 50px;">
                            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Just In</span>
                            <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">New <span style="color: #036b41;">Arrivals</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            @php
                            $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(12)->get();
                            @endphp
                            @foreach($product_lists as $product)
                        <!-- Start Single List  -->
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$product->slug)}}">
                                    @php
                                        $photo=explode(',',$product->photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                </a>
                                <div class="button-head">
                                    <div class="product-action d-flex justify-content-center align-items-center w-100">
                                            <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                            <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                <div class="product-price">
                                    @php
                                        $after_discount=($product->price-($product->price*$product->discount)/100);
                                    @endphp
                                    <span>Rs:{{number_format($after_discount,2)}}</span>
                                    @if($product->discount>0)
                                        <del style="padding-left:4%;">Rs:{{number_format($product->price,2)}}</del>
                                    @endif
                                </div>
                            </div>
                          </div>
                          <!-- End Single List  -->
                              @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Home List  -->

<!-- Start Product Area -->
<style>
    /* Floating Action Buttons */
    .single-product .product-img .button-head {
        background: transparent !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        position: absolute !important;
        bottom: 15px !important;
        left: 0 !important;
        width: 100% !important;
        border: none !important;
        z-index: 9 !important;
    }
    
    .single-product .product-action {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        float: none !important;
    }

    .single-product .product-action a {
        color: #333 !important;
        font-size: 18px !important;
        margin: 0 5px !important;
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        background: #fff !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    .single-product .product-action a:hover {
        background: #036b41 !important;
        color: #fff !important;
    }
    .single-product .product-action a i {
        margin: 0 !important;
        padding: 0 !important;
    }
    .filter-tope-group { display: flex; justify-content: center; gap: 15px; margin-bottom: 40px; border: none; flex-wrap: wrap; }
    .filter-tope-group .btn { 
        background: #f4f6f8 !important; 
        color: #555 !important; 
        border-radius: 30px; 
        padding: 10px 30px; 
        font-weight: 600; 
        font-size: 15px;
        border: 2px solid transparent; 
        transition: all 0.3s;
        text-transform: capitalize;
    }
    .filter-tope-group .btn:hover, .filter-tope-group .btn.is-checked, .filter-tope-group .btn.active { 
        background: #036b41 !important; 
        color: #fff !important; 
        border-color: #036b41; 
        box-shadow: 0 8px 20px rgba(3, 107, 65, 0.25);
    }

    /* Product Card Styling */
    .single-product {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        border: 1px solid #f0f0f0;
        margin-bottom: 30px;
    }
    .single-product:hover {
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        transform: translateY(-8px);
    }
    .single-product .product-img {
        position: relative;
        overflow: hidden;
    }
    .single-product .product-content {
        padding: 22px 20px;
        text-align: left;
    }
    .single-product .product-content h3 {
        margin-bottom: 10px;
    }
    .single-product .product-content h3 a {
        font-size: 16px;
        font-weight: 600;
        color: #222 !important;
        text-decoration: none;
        transition: color 0.3s;
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .single-product .product-content h3 a:hover {
        color: #036b41 !important;
    }
    .single-product .product-content .product-price {
        font-size: 18px;
        font-weight: 800;
        color: #036b41;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .single-product .product-content .product-price del {
        font-size: 14px;
        color: #aaa;
        font-weight: 500;
        text-decoration: line-through;
    }
    
    /* Completely Redesign Action Buttons (Vertical Floating Icons) */
    .single-product .button-head {
        background: transparent !important;
        position: absolute !important;
        top: 15px !important;
        right: -60px !important; /* Hidden by default off-screen */
        width: auto !important;
        display: flex !important;
        
        gap: 10px !important;
        align-items: center !important;
        padding: 0 !important;
        transition: right 0.4s ease !important;
        opacity: 0 !important;
        z-index: 9 !important;
        border: none !important;
        bottom: auto !important;
        left: auto !important;
    }
    
    .single-product:hover .button-head {
        right: 15px !important;
        opacity: 1 !important;
    }

    
    
    /* Common style for all 3 icons */
    .single-product .product-action a,
    .single-product .product-action-2 a {
        width: 42px !important;
        height: 42px !important;
        background: #fff !important;
        color: #333 !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-decoration: none !important;
        transition: all 0.3s !important;
        font-size: 18px !important;
        border: none !important;
        padding: 0 !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
    }
    
    .single-product .product-action a:hover,
    .single-product .product-action-2 a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: scale(1.1);
    }

    /* Hide text from View/Wishlist/Cart */
    .single-product .product-action a span,
    .single-product .product-action-2 a span {
        display: none !important; 
    }
    /* Midium Banner (Featured Products) Redesign */
    .midium-banner {
        padding: 60px 0 !important;
    }
    .midium-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .midium-banner .single-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05);
    }
    .midium-banner .single-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%);
        z-index: 1;
    }
    .midium-banner .single-banner .content {
        position: absolute;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2;
        text-align: left !important;
        padding: 0 !important;
        width: 80%;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        background: #036b41;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 4px;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; text-decoration: underline; /* Make discount pop, or use a distinct green/yellow */
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        text-shadow: none !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px);
    }
    /* Uniform Product Card Heights */
    .single-product {
        height: 100%;
        display: flex;
        
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        padding-top: 120%; /* Enforce a fixed aspect ratio for images */
        background: #fff;
        overflow: hidden;
    }
    .single-product .product-img a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-height: 100%;
        width: auto !important;
        max-width: 100%;
        object-fit: contain;
    }
    .single-product .product-content {
        flex-grow: 1;
        display: flex;
        
        justify-content: flex-end;
    }

    /* Fix Card Heights and Image Contain */
    .single-product {
        height: 100%;
        display: flex;
        
        justify-content: space-between;
        background: #fff;
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        height: 300px; /* Fixed height for all images */
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .single-product .product-img a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important;
        object-fit: contain;
    }
    .single-product .product-content {
        padding-top: 15px;
    }

    /* Perfect Global Section Padding */
    .section {
        padding: 70px 0 !important;
    }
    .section-title {
        margin-bottom: 50px !important;
    }
    .small-banner.section {
        padding: 40px 0 !important;
    }
    .midium-banner {
        padding: 70px 0 !important;
    }
    /* Add Padding to Product Images inside Cards */
    .single-product .product-img {
        padding: 20px !important;
    }
    
    /* Better Design for Slider Navigation Arrows */
    .owl-carousel .owl-nav {
        margin-top: 30px !important;
        text-align: center;
    }
    .owl-carousel .owl-nav div {
        background: #036b41 !important;
        color: #fff !important;
        width: 45px !important;
        height: 45px !important;
        
        text-align: center;
        border-radius: 50% !important;
        font-size: 20px !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 10px !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .owl-carousel .owl-nav div:hover {
        background: #222 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .owl-carousel .owl-nav div i {
        
    }
    /* Fix Slider Icon Alignment */
    .owl-carousel .owl-nav div {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        line-height: normal !important;
        padding: 0 !important;
    }
    .owl-carousel .owl-nav div i {
        line-height: normal !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }
    /* Premium Small Banner Design for White-Background Products */
    .small-banner .single-banner {
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        mix-blend-mode: multiply; /* Magically removes the white background */
        transition: transform 0.5s ease;
        opacity: 0.85; /* Blend nicely with the text */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 1;
    }
    .small-banner .single-banner .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        
        align-items: center;
        justify-content: flex-end;
        text-align: center;
        z-index: 2;
        padding-bottom: 30px;
        background: linear-gradient(to top, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 50%);
    }
    .small-banner .single-banner .content h3 {
        color: #023a23 !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 22px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px !important;
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 10px 25px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 13px !important;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .small-banner .single-banner .content a:hover {
        background: #023a23 !important;
        transform: translateY(-3px);
    }
    /* Fixing the Small Banner Content Alignment */
    .small-banner .single-banner .content {
        position: absolute !important;
        top: auto !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: flex-end !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 0 !important;
        padding-bottom: 20px !important;
        background: transparent !important;
    }
    /* We add a separate pseudo element for the gradient so it doesn't mess with flex */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 50% !important;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
    }
    .small-banner .single-banner h3, 
    .small-banner .single-banner a {
        position: relative !important;
        z-index: 3 !important;
    }
    /* Sleek Lifestyle Category Banners */
    .small-banner .single-banner {
        background: #000;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
        opacity: 0.7; /* Darken image slightly so text is readable */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 0.5;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner::before {
        display: none !important; /* Remove any previously added gradients */
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 14px !important;
        letter-spacing: 1.5px;
        transition: all 0.3s ease !important;
        border: 2px solid transparent !important;
    }
    .small-banner .single-banner .content a:hover {
        background: transparent !important;
        border: 2px solid #fff !important;
        transform: translateY(-3px);
    }
    /* Restore to the Elegant White-on-Green Lifestyle Design */
    .small-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
    }
    /* The soft green gradient overlay */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(3,107,65,0.7) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
        display: block !important;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif !important;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        letter-spacing: 2px !important;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
    }
    .small-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        padding: 12px 30px !important;
        border-radius: 4px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        font-size: 14px !important;
        letter-spacing: 1.5px !important;
        transition: all 0.3s ease !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    }
    .small-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
    /* Midium Banner (Featured Products) Redesign for White-Background Products */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%) !important;
        display: flex !important;
        align-items: center !important;
    }
    .midium-banner .single-banner::before {
        display: none !important; /* Remove dark overlay */
    }
    .midium-banner .single-banner img {
        width: 50% !important;
        height: 90% !important;
        object-fit: contain !important;
        mix-blend-mode: multiply !important;
        transition: transform 0.5s ease !important;
        position: absolute !important;
        right: 10px !important;
        bottom: 10px !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.1) !important;
    }
    .midium-banner .single-banner .content {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 40px !important;
        width: 60% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 15px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 6px 15px !important;
        border-radius: 30px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #023a23 !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 30px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 25px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #036b41 !important; 
        text-decoration: underline !important; 
    }
    .midium-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(3, 107, 65, 0.3) !important;
        border: 2px solid #036b41 !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: transparent !important;
        color: #036b41 !important;
        transform: translateY(-3px) !important;
    }
    /* Revert Midium Banner to the Original Behtreen Design */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: transparent !important;
        display: block !important;
    }
    .midium-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease !important;
        position: static !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05) !important;
    }
    .midium-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%) !important;
        z-index: 1 !important;
        display: block !important;
    }
    .midium-banner .single-banner .content {
        position: absolute !important;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 0 !important;
        width: 80% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 10px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 4px 12px !important;
        border-radius: 4px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; 
        text-decoration: underline !important;
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        border: none !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
</style>
<div class="product-area section">
    <div class="container">
<div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="margin-bottom: 50px;">
                    <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px; display:block; margin-bottom: 10px;">Explore Collection</span>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 36px; font-weight: 800; color: #111;">Our <span style="color: #036b41;">Products</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs filter-tope-group" id="myTab" role="tablist">
                            @php
                            $categories=DB::table('categories')->where('status','active')->where('is_parent',1)->get();
                            // dd($categories);
                            @endphp
                            @if($categories)
                            <button class="btn is-checked" data-filter="*">
                                All Products
                            </button>
                            @foreach($categories as $key=>$cat)

                            <button class="btn" data-filter=".{{$cat->id}}">
                                {{$cat->title}}
                            </button>
                            @endforeach
                            @endif
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content isotope-grid" id="myTabContent">
                        <!-- Start Single Tab -->
                        @if($product_lists)
                        @foreach($product_lists as $key=>$product)
                        <div class="col-sm-12 col-md-6 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{route('product-detail',$product->slug)}}">
                                        @php
                                        $photo=explode(',',$product->photo);
                                        // dd($photo);
                                        @endphp
                                        <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        @if($product->stock<=0)
                                            <span class="out-of-stock">Sale out</span>
                                            @elseif($product->condition=='new')
                                            <span class="new">New</span
                                                @elseif($product->condition=='hot')
                                            <span class="hot">Hot</span>
                                            @else
                                            <span class="price-dec">{{$product->discount}}% Off</span>
                                            @endif


                                    </a>
                                    <div class="button-head">
                                        <div class="product-action d-flex justify-content-center align-items-center w-100">
                                            <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                            <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                    <div class="product-price">
                                        @php
                                        $after_discount=($product->price-($product->price*$product->discount)/100);
                                        @endphp
                                        <span>Rs:{{number_format($after_discount,2)}}</span>
                                        <del style="padding-left:4%;">Rs:{{number_format($product->price,2)}}</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!--/ End Single Tab -->
                        @endif

                        <!--/ End Single Tab -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->

<!-- Start Return Policy Area -->
<section id="return-policy" class="return-policy-area section" style="background-color: #fff; padding: 90px 0; position: relative;">
    <div class="container">
        <div class="section-title text-center" style="margin-bottom: 60px;">
            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Peace of Mind</span>
            <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Hassle-Free <span style="color: #036b41;">Returns</span></h2>
        </div>
        <div class="row">
            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="return-step-card text-center" style="background: #fdfdfd; border: 1px solid #eee; padding: 40px 30px; border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); height: 100%; position: relative; overflow: hidden; margin-bottom:30px;">
                    <div style="width: 70px; height: 70px; background: rgba(3, 107, 65, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 25px;">
                        <i class="ti-timer" style="font-size: 30px; color: #036b41;"></i>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #333; font-family: 'Orbitron', sans-serif;">7 Working Days</h4>
                    <p style="font-size: 15px; color: #666; line-height: 1.6; margin-bottom: 0;">You have up to 7 working days from the date of delivery to request a return if you change your mind.</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="return-step-card text-center" style="background: #036b41; padding: 40px 30px; border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 15px 40px rgba(3, 107, 65, 0.2); height: 100%; position: relative; overflow: hidden; margin-bottom:30px; transform: scale(1.05); z-index: 2;">
                    <div style="width: 70px; height: 70px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 25px;">
                        <i class="ti-package" style="font-size: 30px; color: #fff;"></i>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #fff; font-family: 'Orbitron', sans-serif;">Box & Unassembled</h4>
                    <p style="font-size: 15px; color: rgba(255,255,255,0.9); line-height: 1.6; margin-bottom: 0;">Must be in the original box. If the product is fitted or assembled, it is strictly non-returnable.</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="return-step-card text-center" style="background: #fdfdfd; border: 1px solid #eee; padding: 40px 30px; border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); height: 100%; position: relative; overflow: hidden; margin-bottom:30px;">
                    <div style="width: 70px; height: 70px; background: rgba(3, 107, 65, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 25px;">
                        <i class="ti-wallet" style="font-size: 30px; color: #036b41;"></i>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #333; font-family: 'Orbitron', sans-serif;">Fast Refund</h4>
                    <p style="font-size: 15px; color: #666; line-height: 1.6; margin-bottom: 0;">Once we receive and inspect the item, your refund will be processed within 5-7 business days.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="#faq" class="btn" style="background: #222; color: #fff; padding: 12px 35px; border-radius: 30px; font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; display: inline-block; transition: all 0.3s ease; border: none;">Read Full Policy FAQs</a>
            </div>
        </div>
    </div>
</section>
<!-- Add some hover effects to the return cards -->
<style>
    /* Floating Action Buttons */
    .single-product .product-img .button-head {
        background: transparent !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        position: absolute !important;
        bottom: 15px !important;
        left: 0 !important;
        width: 100% !important;
        border: none !important;
        z-index: 9 !important;
    }
    
    .single-product .product-action {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        float: none !important;
    }

    .single-product .product-action a {
        color: #333 !important;
        font-size: 18px !important;
        margin: 0 5px !important;
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        background: #fff !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    .single-product .product-action a:hover {
        background: #036b41 !important;
        color: #fff !important;
    }
    .single-product .product-action a i {
        margin: 0 !important;
        padding: 0 !important;
    }
    .return-step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.08) !important;
    }
    .return-step-card[style*="background: #036b41"]:hover {
        transform: scale(1.05) translateY(-10px) !important;
        box-shadow: 0 20px 40px rgba(3, 107, 65, 0.3) !important;
    }
    /* Uniform Product Card Heights */
    .single-product {
        height: 100%;
        display: flex;
        
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        padding-top: 120%; /* Enforce a fixed aspect ratio for images */
        background: #fff;
        overflow: hidden;
    }
    .single-product .product-img a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-height: 100%;
        width: auto !important;
        max-width: 100%;
        object-fit: contain;
    }
    .single-product .product-content {
        flex-grow: 1;
        display: flex;
        
        justify-content: flex-end;
    }

    /* Fix Card Heights and Image Contain */
    .single-product {
        height: 100%;
        display: flex;
        
        justify-content: space-between;
        background: #fff;
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        height: 300px; /* Fixed height for all images */
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .single-product .product-img a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important;
        object-fit: contain;
    }
    .single-product .product-content {
        padding-top: 15px;
    }

    /* Perfect Global Section Padding */
    .section {
        padding: 70px 0 !important;
    }
    .section-title {
        margin-bottom: 50px !important;
    }
    .small-banner.section {
        padding: 40px 0 !important;
    }
    .midium-banner {
        padding: 70px 0 !important;
    }
    /* Add Padding to Product Images inside Cards */
    .single-product .product-img {
        padding: 20px !important;
    }
    
    /* Better Design for Slider Navigation Arrows */
    .owl-carousel .owl-nav {
        margin-top: 30px !important;
        text-align: center;
    }
    .owl-carousel .owl-nav div {
        background: #036b41 !important;
        color: #fff !important;
        width: 45px !important;
        height: 45px !important;
        
        text-align: center;
        border-radius: 50% !important;
        font-size: 20px !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 10px !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .owl-carousel .owl-nav div:hover {
        background: #222 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .owl-carousel .owl-nav div i {
        
    }
    /* Fix Slider Icon Alignment */
    .owl-carousel .owl-nav div {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        line-height: normal !important;
        padding: 0 !important;
    }
    .owl-carousel .owl-nav div i {
        line-height: normal !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }
    /* Premium Small Banner Design for White-Background Products */
    .small-banner .single-banner {
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        mix-blend-mode: multiply; /* Magically removes the white background */
        transition: transform 0.5s ease;
        opacity: 0.85; /* Blend nicely with the text */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 1;
    }
    .small-banner .single-banner .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        
        align-items: center;
        justify-content: flex-end;
        text-align: center;
        z-index: 2;
        padding-bottom: 30px;
        background: linear-gradient(to top, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 50%);
    }
    .small-banner .single-banner .content h3 {
        color: #023a23 !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 22px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px !important;
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 10px 25px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 13px !important;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .small-banner .single-banner .content a:hover {
        background: #023a23 !important;
        transform: translateY(-3px);
    }
    /* Fixing the Small Banner Content Alignment */
    .small-banner .single-banner .content {
        position: absolute !important;
        top: auto !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: flex-end !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 0 !important;
        padding-bottom: 20px !important;
        background: transparent !important;
    }
    /* We add a separate pseudo element for the gradient so it doesn't mess with flex */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 50% !important;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
    }
    .small-banner .single-banner h3, 
    .small-banner .single-banner a {
        position: relative !important;
        z-index: 3 !important;
    }
    /* Sleek Lifestyle Category Banners */
    .small-banner .single-banner {
        background: #000;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
        opacity: 0.7; /* Darken image slightly so text is readable */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 0.5;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner::before {
        display: none !important; /* Remove any previously added gradients */
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 14px !important;
        letter-spacing: 1.5px;
        transition: all 0.3s ease !important;
        border: 2px solid transparent !important;
    }
    .small-banner .single-banner .content a:hover {
        background: transparent !important;
        border: 2px solid #fff !important;
        transform: translateY(-3px);
    }
    /* Restore to the Elegant White-on-Green Lifestyle Design */
    .small-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
    }
    /* The soft green gradient overlay */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(3,107,65,0.7) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
        display: block !important;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif !important;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        letter-spacing: 2px !important;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
    }
    .small-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        padding: 12px 30px !important;
        border-radius: 4px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        font-size: 14px !important;
        letter-spacing: 1.5px !important;
        transition: all 0.3s ease !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    }
    .small-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
    /* Midium Banner (Featured Products) Redesign for White-Background Products */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%) !important;
        display: flex !important;
        align-items: center !important;
    }
    .midium-banner .single-banner::before {
        display: none !important; /* Remove dark overlay */
    }
    .midium-banner .single-banner img {
        width: 50% !important;
        height: 90% !important;
        object-fit: contain !important;
        mix-blend-mode: multiply !important;
        transition: transform 0.5s ease !important;
        position: absolute !important;
        right: 10px !important;
        bottom: 10px !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.1) !important;
    }
    .midium-banner .single-banner .content {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 40px !important;
        width: 60% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 15px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 6px 15px !important;
        border-radius: 30px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #023a23 !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 30px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 25px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #036b41 !important; 
        text-decoration: underline !important; 
    }
    .midium-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(3, 107, 65, 0.3) !important;
        border: 2px solid #036b41 !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: transparent !important;
        color: #036b41 !important;
        transform: translateY(-3px) !important;
    }
    /* Revert Midium Banner to the Original Behtreen Design */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: transparent !important;
        display: block !important;
    }
    .midium-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease !important;
        position: static !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05) !important;
    }
    .midium-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%) !important;
        z-index: 1 !important;
        display: block !important;
    }
    .midium-banner .single-banner .content {
        position: absolute !important;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 0 !important;
        width: 80% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 10px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 4px 12px !important;
        border-radius: 4px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; 
        text-decoration: underline !important;
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        border: none !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
</style>
<!-- End Return Policy Area -->

<!-- Start FAQs Area -->
<section id="faq" class="faq-area section" style="background-color: #f7f9fb; padding: 80px 0;">
    <div class="container">
        <div class="section-title text-center" style="margin-bottom: 50px;">
            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Any Questions?</span>
            <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Frequently Asked <span style="color: #036b41;">Questions</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="card" style="border: none; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                        <div class="card-header" id="headingOne" style="background: #036b41; border-bottom: none; border-radius: 8px; padding: 0;">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%; text-align: left; padding: 20px; color: #fff; font-weight: 600; text-decoration: none; font-size: 16px; display: flex; justify-content: space-between; align-items: center;">
                                    How long does delivery take? <i class="ti-angle-down" style="font-size: 12px;"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body" style="background: #fff; padding: 0 20px 20px; color: #666; line-height: 1.6; border-radius: 0 0 8px 8px;">
                                We offer fast shipping across the UAE. Standard delivery typically takes 2-5 business days. For customized furniture orders, please allow 10-7 working days.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="card" style="border: none; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                        <div class="card-header" id="headingTwo" style="background: #036b41; border-bottom: none; border-radius: 8px; padding: 0;">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%; text-align: left; padding: 20px; color: #fff; font-weight: 600; text-decoration: none; font-size: 16px; display: flex; justify-content: space-between; align-items: center;">
                                    Do you provide installation services? <i class="ti-angle-down" style="font-size: 12px;"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body" style="background: #fff; padding: 0 20px 20px; color: #666; line-height: 1.6; border-radius: 0 0 8px 8px;">
                                Yes, professional installation is free for all orders. Our expert team will deliver and assemble your furniture right in your home or office.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="card" style="border: none; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                        <div class="card-header" id="headingThree" style="background: #036b41; border-bottom: none; border-radius: 8px; padding: 0;">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="width: 100%; text-align: left; padding: 20px; color: #fff; font-weight: 600; text-decoration: none; font-size: 16px; display: flex; justify-content: space-between; align-items: center;">
                                    Do your products come with a warranty? <i class="ti-angle-down" style="font-size: 12px;"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body" style="background: #fff; padding: 0 20px 20px; color: #666; line-height: 1.6; border-radius: 0 0 8px 8px;">
                                Absolutely! All our furniture items come with a standard 1-year warranty against manufacturing defects. Premium gaming and office chairs include a 2-year warranty on mechanisms.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQs Area -->

<!-- Start Contact Area -->
<section class="contact-area section" style="background-color: #fff; padding: 80px 0;">
    <div class="container">
        <div class="section-title text-center" style="margin-bottom: 50px;">
            <span style="color: #036b41; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">Get In Touch</span>
            <h2 style="font-family: 'Orbitron', sans-serif; font-size: 32px; font-weight: 800; color: #222; margin-top: 10px;">Contact <span style="color: #036b41;">Us</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="contact-box text-center" style="padding: 40px 30px; background: #fbfbfb; border-radius: 12px; border: 1px solid #eee; height: 100%; transition: transform 0.3s ease;">
                    <i class="ti-mobile" style="font-size: 40px; color: #036b41; margin-bottom: 20px; display: inline-block;"></i>
                    <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 12px;">Call Us Now</h4>
                    <p style="color: #666; margin-bottom: 0; font-size: 15px;">+971 123 456 789<br>Mon-Sat, 9AM to 6PM</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="contact-box text-center" style="padding: 40px 30px; background: #036b41; border-radius: 12px; box-shadow: 0 15px 30px rgba(3,107,65,0.2); height: 100%; transition: transform 0.3s ease; transform: translateY(-10px);">
                    <i class="ti-email" style="font-size: 40px; color: #fff; margin-bottom: 20px; display: inline-block;"></i>
                    <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 12px; color: #fff;">Email Address</h4>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; font-size: 15px;">info@umqalwadi.com<br>support@umqalwadi.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="contact-box text-center" style="padding: 40px 30px; background: #fbfbfb; border-radius: 12px; border: 1px solid #eee; height: 100%; transition: transform 0.3s ease;">
                    <i class="ti-location-pin" style="font-size: 40px; color: #036b41; margin-bottom: 20px; display: inline-block;"></i>
                    <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 12px;">Our Location</h4>
                    <p style="color: #666; margin-bottom: 0; font-size: 15px;">Dubai, United Arab Emirates<br>Main Furniture Market</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

@include('frontend.layouts.newsletter')

<!-- Modal -->
@if($product_lists)
@foreach($product_lists as $key=>$product)
<div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                @php
                                $photo=explode(',',$product->photo);
                                // dd($photo);
                                @endphp
                                @foreach($photo as $data)
                                <div class="single-slider">
                                    <img src="{{$data}}" alt="{{$data}}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>{{$product->title}}</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        {{-- <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="fa fa-star"></i> --}}
                                        @php
                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                        @endphp
                                        @for($i=1; $i<=5; $i++)
                                            @if($rate>=$i)
                                            <i class="yellow fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star"></i>
                                            @endif
                                            @endfor
                                    </div>
                                    <a href="#"> ({{$rate_count}} customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    @if($product->stock >0)
                                    <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                    @else
                                    <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
                                    @endif
                                </div>
                            </div>
                            @php
                            $after_discount=($product->price-($product->price*$product->discount)/100);
                            @endphp
                            <h3><small><del class="text-muted">Rs:{{number_format($product->price,2)}}</del></small> Rs:{{number_format($after_discount,2)}} </h3>
                            <div class="quickview-peragraph">
                                <p>{!! html_entity_decode($product->summary) !!}</p>
                            </div>
                            @if($product->size)
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            @php
                                            $sizes=explode(',',$product->size);
                                            // dd($sizes);
                                            @endphp
                                            @foreach($sizes as $size)
                                            <option>{{$size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                </div>
                            </div>
                            @endif
                            <form action="{{route('single-add-to-cart')}}" method="POST" class="mt-4">
                                @csrf
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="slug" value="{{$product->slug}}">
                                        <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button type="submit" class="btn">Add to cart</button>
                                    <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
<!-- Modal end -->
@endsection

@push('styles')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
<style>
    /* Floating Action Buttons */
    .single-product .product-img .button-head {
        background: transparent !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        position: absolute !important;
        bottom: 15px !important;
        left: 0 !important;
        width: 100% !important;
        border: none !important;
        z-index: 9 !important;
    }
    
    .single-product .product-action {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        float: none !important;
    }

    .single-product .product-action a {
        color: #333 !important;
        font-size: 18px !important;
        margin: 0 5px !important;
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 50% !important;
        background: #fff !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    .single-product .product-action a:hover {
        background: #036b41 !important;
        color: #fff !important;
    }
    .single-product .product-action a i {
        margin: 0 !important;
        padding: 0 !important;
    }
    /* Professional Banner Sliding */
    #Gslider .carousel-inner {
        width: 100%;
        height: auto; 
        background: #000;
        position: relative;
    }

    #Gslider .carousel-inner img {
        width: 100% !important;
        height: auto !important; /* Let image dictate height */
        display: block;
        opacity: 0.85; /* Much brighter image */
        transition: transform 6s ease; /* Subtle zoom effect */
    }
    
    /* Premium Gradient Overlay for the entire slider */
    #Gslider .carousel-item::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.8) 100%);
        pointer-events: none;
        z-index: 1;
    }

    #Gslider .carousel-item.active img {
        transform: scale(1.05); /* Slight zoom on active */
    }

    #Gslider .carousel-caption {
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        text-align: center !important;
        left: 5%;
        right: 5%;
        z-index: 2;
    }

    #Gslider .carousel-inner .carousel-caption h1 {
        font-family: 'Orbitron', sans-serif;
        font-size: 48px;
        font-weight: 900;
        line-height: 1.2;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    #Gslider .carousel-inner .carousel-caption p {
        font-size: 20px;
        color: #f1f1f1;
        margin-bottom: 30px;
        font-weight: 400;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }

    #Gslider .btn.ws-btn {
        background-color: #036b41; /* Matches logo green */
        color: #ffffff;
        padding: 14px 40px;
        border-radius: 4px;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 600;
        border: 2px solid #036b41;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.4);
    }

    #Gslider .btn.ws-btn:hover {
        background-color: transparent;
        color: #036b41;
        border-color: #036b41;
        box-shadow: none;
    }

    #Gslider .carousel-indicators {
        bottom: 30px;
    }
    
    #Gslider .carousel-indicators li {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 6px;
        background-color: rgba(255, 255, 255, 0.5);
    }
    
    #Gslider .carousel-indicators li.active {
        background-color: #036b41;
    }
    
    /* Responsive styling for small screens */
    @media (max-width: 768px) {
        #Gslider .carousel-inner .carousel-caption h1 {
            font-size: 32px;
        }
        #Gslider .carousel-inner .carousel-caption p {
            font-size: 16px;
        }
    }
    /* Midium Banner (Featured Products) Redesign */
    .midium-banner {
        padding: 60px 0 !important;
    }
    .midium-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .midium-banner .single-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05);
    }
    .midium-banner .single-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%);
        z-index: 1;
    }
    .midium-banner .single-banner .content {
        position: absolute;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2;
        text-align: left !important;
        padding: 0 !important;
        width: 80%;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        background: #036b41;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 4px;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; text-decoration: underline; /* Make discount pop, or use a distinct green/yellow */
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        text-shadow: none !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px);
    }
    /* Uniform Product Card Heights */
    .single-product {
        height: 100%;
        display: flex;
        
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        padding-top: 120%; /* Enforce a fixed aspect ratio for images */
        background: #fff;
        overflow: hidden;
    }
    .single-product .product-img a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-height: 100%;
        width: auto !important;
        max-width: 100%;
        object-fit: contain;
    }
    .single-product .product-content {
        flex-grow: 1;
        display: flex;
        
        justify-content: flex-end;
    }

    /* Fix Card Heights and Image Contain */
    .single-product {
        height: 100%;
        display: flex;
        
        justify-content: space-between;
        background: #fff;
    }
    .single-product .product-img {
        position: relative;
        width: 100%;
        height: 300px; /* Fixed height for all images */
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .single-product .product-img a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .single-product .product-img img {
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important;
        object-fit: contain;
    }
    .single-product .product-content {
        padding-top: 15px;
    }

    /* Perfect Global Section Padding */
    .section {
        padding: 70px 0 !important;
    }
    .section-title {
        margin-bottom: 50px !important;
    }
    .small-banner.section {
        padding: 40px 0 !important;
    }
    .midium-banner {
        padding: 70px 0 !important;
    }
    /* Add Padding to Product Images inside Cards */
    .single-product .product-img {
        padding: 20px !important;
    }
    
    /* Better Design for Slider Navigation Arrows */
    .owl-carousel .owl-nav {
        margin-top: 30px !important;
        text-align: center;
    }
    .owl-carousel .owl-nav div {
        background: #036b41 !important;
        color: #fff !important;
        width: 45px !important;
        height: 45px !important;
        
        text-align: center;
        border-radius: 50% !important;
        font-size: 20px !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 10px !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .owl-carousel .owl-nav div:hover {
        background: #222 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .owl-carousel .owl-nav div i {
        
    }
    /* Fix Slider Icon Alignment */
    .owl-carousel .owl-nav div {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        line-height: normal !important;
        padding: 0 !important;
    }
    .owl-carousel .owl-nav div i {
        line-height: normal !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }
    /* Premium Small Banner Design for White-Background Products */
    .small-banner .single-banner {
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        mix-blend-mode: multiply; /* Magically removes the white background */
        transition: transform 0.5s ease;
        opacity: 0.85; /* Blend nicely with the text */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 1;
    }
    .small-banner .single-banner .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        
        align-items: center;
        justify-content: flex-end;
        text-align: center;
        z-index: 2;
        padding-bottom: 30px;
        background: linear-gradient(to top, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 50%);
    }
    .small-banner .single-banner .content h3 {
        color: #023a23 !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 22px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px !important;
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 10px 25px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 13px !important;
        letter-spacing: 1px;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 10px rgba(3, 107, 65, 0.3);
    }
    .small-banner .single-banner .content a:hover {
        background: #023a23 !important;
        transform: translateY(-3px);
    }
    /* Fixing the Small Banner Content Alignment */
    .small-banner .single-banner .content {
        position: absolute !important;
        top: auto !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: flex-end !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 0 !important;
        padding-bottom: 20px !important;
        background: transparent !important;
    }
    /* We add a separate pseudo element for the gradient so it doesn't mess with flex */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 50% !important;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
    }
    .small-banner .single-banner h3, 
    .small-banner .single-banner a {
        position: relative !important;
        z-index: 3 !important;
    }
    /* Sleek Lifestyle Category Banners */
    .small-banner .single-banner {
        background: #000;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
        opacity: 0.7; /* Darken image slightly so text is readable */
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
        opacity: 0.5;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner::before {
        display: none !important; /* Remove any previously added gradients */
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }
    .small-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 14px !important;
        letter-spacing: 1.5px;
        transition: all 0.3s ease !important;
        border: 2px solid transparent !important;
    }
    .small-banner .single-banner .content a:hover {
        background: transparent !important;
        border: 2px solid #fff !important;
        transform: translateY(-3px);
    }
    /* Restore to the Elegant White-on-Green Lifestyle Design */
    .small-banner .single-banner {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 350px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .small-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease;
    }
    .small-banner .single-banner:hover img {
        transform: scale(1.1);
    }
    /* The soft green gradient overlay */
    .small-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(3,107,65,0.7) 100%) !important;
        z-index: 1 !important;
        pointer-events: none !important;
        display: block !important;
    }
    .small-banner .single-banner .content {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        transform: none !important;
        display: flex !important;
        
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        z-index: 2 !important;
        padding: 20px !important;
        background: transparent !important;
    }
    .small-banner .single-banner .content h3 {
        color: #fff !important; 
        font-family: 'Orbitron', sans-serif !important;
        font-size: 26px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        letter-spacing: 2px !important;
        margin-bottom: 25px !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5) !important;
    }
    .small-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        padding: 12px 30px !important;
        border-radius: 4px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        font-size: 14px !important;
        letter-spacing: 1.5px !important;
        transition: all 0.3s ease !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    }
    .small-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
    /* Midium Banner (Featured Products) Redesign for White-Background Products */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: linear-gradient(135deg, #f0f7f4 0%, #d1e8de 100%) !important;
        display: flex !important;
        align-items: center !important;
    }
    .midium-banner .single-banner::before {
        display: none !important; /* Remove dark overlay */
    }
    .midium-banner .single-banner img {
        width: 50% !important;
        height: 90% !important;
        object-fit: contain !important;
        mix-blend-mode: multiply !important;
        transition: transform 0.5s ease !important;
        position: absolute !important;
        right: 10px !important;
        bottom: 10px !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.1) !important;
    }
    .midium-banner .single-banner .content {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 40px !important;
        width: 60% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 15px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 6px 15px !important;
        border-radius: 30px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #023a23 !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 30px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 25px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #036b41 !important; 
        text-decoration: underline !important; 
    }
    .midium-banner .single-banner .content a {
        background: #036b41 !important;
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(3, 107, 65, 0.3) !important;
        border: 2px solid #036b41 !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: transparent !important;
        color: #036b41 !important;
        transform: translateY(-3px) !important;
    }
    /* Revert Midium Banner to the Original Behtreen Design */
    .midium-banner .single-banner {
        border-radius: 12px !important;
        overflow: hidden !important;
        position: relative !important;
        height: 350px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        background: transparent !important;
        display: block !important;
    }
    .midium-banner .single-banner img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        mix-blend-mode: normal !important;
        transition: transform 0.5s ease !important;
        position: static !important;
    }
    .midium-banner .single-banner:hover img {
        transform: scale(1.05) !important;
    }
    .midium-banner .single-banner::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(3,107,65,0.4) 100%) !important;
        z-index: 1 !important;
        display: block !important;
    }
    .midium-banner .single-banner .content {
        position: absolute !important;
        top: 50% !important;
        left: 40px !important;
        transform: translateY(-50%) !important;
        z-index: 2 !important;
        text-align: left !important;
        padding: 0 !important;
        width: 80% !important;
        background: transparent !important;
    }
    .midium-banner .single-banner .content p {
        color: #fff !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        margin-bottom: 10px !important;
        background: #036b41 !important;
        display: inline-block !important;
        padding: 4px 12px !important;
        border-radius: 4px !important;
    }
    .midium-banner .single-banner .content h3 {
        color: #fff !important;
        font-family: 'Orbitron', sans-serif !important;
        font-size: 32px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
        text-shadow: none !important;
    }
    .midium-banner .single-banner .content h3 span {
        color: #fff !important; 
        text-decoration: underline !important;
    }
    .midium-banner .single-banner .content a {
        background: #fff !important;
        color: #036b41 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: all 0.3s ease !important;
        display: flex !important; align-items: center !important; justify-content: center !important; line-height: 1.2 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        border: none !important;
    }
    .midium-banner .single-banner .content a:hover {
        background: #036b41 !important;
        color: #fff !important;
        transform: translateY(-3px) !important;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    /*==================================================================
        [ Isotope ]*/
    var $topeContainer = $('.isotope-grid');
    var $filter = $('.filter-tope-group');

    // filter items on button click
    $filter.each(function() {
        $filter.on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({
                filter: filterValue
            });
        });

    });

    // init Isotope
    $(window).on('load', function() {
        var $grid = $topeContainer.each(function() {
            $(this).isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows',
                percentPosition: true,
                animationEngine: 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    var isotopeButton = $('.filter-tope-group button');

    $(isotopeButton).each(function() {
        $(this).on('click', function() {
            for (var i = 0; i < isotopeButton.length; i++) {
                $(isotopeButton[i]).removeClass('how-active1');
            }

            $(this).addClass('how-active1');
        });
    });
</script>
<script>
    function cancelFullScreen(el) {
        var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el.exitFullscreen;
        if (requestMethod) { // cancel full screen.
            requestMethod.call(el);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
    }

    function requestFullScreen(el) {
        // Supports most browsers and their versions.
        var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

        if (requestMethod) { // Native full screen.
            requestMethod.call(el);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
        return false
    }
</script>

@endpush




