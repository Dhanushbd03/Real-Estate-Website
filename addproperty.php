
            <form action="submitproperty.php" method="post" enctype="multipart/form-data">
                <!-- Add input fields for property details (e.g., title, image file, description) -->
                <label for="title">Title:</label>
                <input type="text" name="title" required>
                
                <label for="image">Image File:</label>
                <input type="file" name="image" accept="image/*" required>
                
                <label for="description">Description:</label>
                <textarea name="description" required></textarea>
                
                <button type="submit">Submit Property</button>
            </form>
