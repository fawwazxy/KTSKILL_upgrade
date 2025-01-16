<div class="news-ticker">
    <div class="news-ticker-label">
        <i class="fas fa-broadcast-tower"></i> Latest News
    </div>
    <div class="news-ticker-content">
        <div class="news-wrapper">
            <span class="news-item">Ticker widget with multiple templates, skins, and animations.</span>
            <span class="news-item">Adding Links To Your Items: You can add links to your news items, check it out!</span>
            <span class="news-item">News Ticker Widget</span>
        </div>
    </div>
</div>




<style>
/* Main News Ticker Styling */
.news-ticker {
    display: flex; /* Flexbox for alignment */
    align-items: center; /* Align items vertically */
    background-color: #f5f8ff; /* Light background */
    border: 2px solid #007bff; /* Blue border */
    border-radius: 5px; /* Rounded corners */
    padding: 5px 10px; /* Reduced padding */
    font-family: 'Arial', sans-serif; /* Modern font */
    font-size: 14px; /* Smaller font size for a compact look */
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* Ensure it's on top */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    overflow: hidden;
}

/* Label Section */
.news-ticker-label {
    display: flex;
    align-items: center; /* Vertically center label content */
    justify-content: center; /* Horizontally center text */
    background-color: #007bff; /* Blue background for label */
    color: white; /* White text color */
    padding: 5px 15px; /* Adjust padding */
    font-weight: bold; /* Bold text for emphasis */
    border-radius: 3px; /* Rounded corners */
    margin-right: 10px; /* Space between label and ticker */
    white-space: nowrap; /* Prevent text wrapping */
    height: 35px; /* Fixed height to align with ticker */
}

/* Icon in Label */
.news-ticker-label i {
    margin-right: 5px; /* Space between icon and text */
}

/* Ticker Content Section */
.news-ticker-content {
    flex: 1; /* Take remaining space */
    overflow: hidden; /* Hide overflow text */
    position: relative; /* Position for inner scrolling */
}

/* Scrolling Wrapper */
.news-wrapper {
    display: inline-flex; /* Inline for horizontal scroll */
    animation: scroll-left 15s linear infinite; /* Smooth scrolling animation */
    white-space: nowrap; /* Prevent wrapping */
}

/* Ticker Text Items */
.news-item {
    margin-right: 50px; /* Space between ticker items */
}

/* Scrolling Text Animation */
@keyframes scroll-left {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}



    </style>