COEN-174 Tuition Waiver

Installation Guide
1. Unzip COEN-174-Tuition-Waiver.zip to webpages/user directory.
2. Set up CGI so that all files in COEN-174-Tuition-Waiver/php-cgi run as CGI scripts.
3. Set file/folder permissions with commands located in permissions.txt.
4. Set compensation per unit amount in 3 places:
      i. main.js: set the dollarsPerUnit variable on line 80
      ii. index.html: edit the heading on line 175
      iii. requestApproval.php: edit the heading on line 353
5. Set hard-coded url to reflect user directory that is distributed in emails in 2 places:
      i. refreshform.php: edit the $url variable on line 69
      ii. approveForm.php: edit the $url variable on ine 73
6. Set hard-coded path for reading and writing data so that it reflects user directory in 4 places:
      i. refreshform.php: edit the $destination variable on line 77
      ii.approveForm.php: edit the $nameOfFile variable on line 5
      iii. requestApproval.php: edit the $nameOfFile variable on line 4
      iv. rejectForm.php: edit the $nameOfFile variable on line 17
7. Set e-mail of end approver (for end system will be Scott Andrews' email) in 1 place:
      i. requestApproval.php: edit $scottAndrewsEmail on line 51
