import os

def replace_assets_in_html_files():
    # Get all HTML files in the current directory
    html_files = [f for f in os.listdir('.') if f.endswith('.html')]

    # Total number of files for progress tracking
    total_files = len(html_files)

    if total_files == 0:
        print("No HTML files found in the current directory.")
        return

    for index, file in enumerate(html_files):
        # Read the contents of the file
        with open(file, 'r', encoding='utf-8') as f:
            content = f.read()

        # Replace instances of /assets/
        new_content = content.replace('/assets/', 'assets/')

        # Write the modified content back to the file only if changes were made
        if content != new_content:
            with open(file, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated: {file}")

        # Simple progress bar
        progress = (index + 1) / total_files * 100
        print(f"\rProgress: [{int(progress) * '#'}{(100 - int(progress)) * ' '}] {progress:.2f}%", end='')

    print("\nFinished processing HTML files.")

if __name__ == "__main__":
    replace_assets_in_html_files()







