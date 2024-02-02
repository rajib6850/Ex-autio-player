<div class="wrap">
    <h1>Ex Audio Player Settings</h1>

    <h2>Installation and Setup Guide:</h2>

    <ol>
        <li><strong>Install ACF Plugin:</strong>
            <p>Start by installing the Advanced Custom Fields (ACF) plugin directly from the WordPress Plugin Repository.</p>
        </li>

        <li><strong>Configure ACF Field:</strong>
            <p>Once the ACF plugin is installed, navigate to the ACF interface and create a new custom field. Assign a meaningful name to this field as it will store the audio link for your player.</p>
        </li>

        <li><strong>Use ACF Field for Audio Link:</strong>
            <p>The ACF field you create will be used to store the audio link you want to feature on your site. When creating or editing a post, you can input the direct audio link into this ACF field. This link should point to the audio file you want to include in the player.</p>
        </li>

        <li><strong>Integrate ACF Field with Shortcode:</strong>
            <p>Include the ACF field name as an attribute within the <code>[ex-audio-player]</code> shortcode using the format: <code>acf_field_name="your_acf_field_name"</code>. Replace "your_acf_field_name" with the actual ACF field name where you'll store the audio links.</p>
        </li>

        <li><strong>Embed Shortcode:</strong>
            <p>Copy the provided shortcode: <code>[ex-audio-player acf_field_name="your_acf_field_name"]</code>. Paste this shortcode into the content of your chosen post or page to showcase the audio player linked to your ACF field.</p>
        </li>
    </ol>
</div>