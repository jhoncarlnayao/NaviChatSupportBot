namespace IT13CLASSCODE
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            btnClick = new Button();
            textinput = new TextBox();
            label1 = new Label();
            textinput2 = new TextBox();
            buttonminus = new Button();
            button2 = new Button();
            button3 = new Button();
            textbox3 = new TextBox();
            label2 = new Label();
            label3 = new Label();
            SuspendLayout();
            // 
            // btnClick
            // 
            btnClick.BackColor = Color.SpringGreen;
            btnClick.Location = new Point(39, 194);
            btnClick.Name = "btnClick";
            btnClick.Size = new Size(117, 37);
            btnClick.TabIndex = 0;
            btnClick.Text = "+";
            btnClick.UseVisualStyleBackColor = false;
            btnClick.Click += button1_Click;
            // 
            // textinput
            // 
            textinput.Font = new Font("Segoe UI", 20.25F, FontStyle.Bold);
            textinput.Location = new Point(39, 65);
            textinput.Multiline = true;
            textinput.Name = "textinput";
            textinput.Size = new Size(117, 41);
            textinput.TabIndex = 1;
            textinput.TextAlign = HorizontalAlignment.Center;
            textinput.TextChanged += textinput_TextChanged;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(39, 47);
            label1.Name = "label1";
            label1.Size = new Size(76, 15);
            label1.TabIndex = 2;
            label1.Text = "First Number";
            label1.Click += label1_Click;
            // 
            // textinput2
            // 
            textinput2.Font = new Font("Segoe UI", 20.25F, FontStyle.Bold);
            textinput2.Location = new Point(185, 65);
            textinput2.Multiline = true;
            textinput2.Name = "textinput2";
            textinput2.Size = new Size(117, 41);
            textinput2.TabIndex = 3;
            textinput2.TextAlign = HorizontalAlignment.Center;
            textinput2.TextChanged += textinput2_TextChanged;
            // 
            // buttonminus
            // 
            buttonminus.BackColor = Color.SpringGreen;
            buttonminus.Location = new Point(185, 194);
            buttonminus.Name = "buttonminus";
            buttonminus.Size = new Size(117, 37);
            buttonminus.TabIndex = 4;
            buttonminus.Text = "-";
            buttonminus.UseVisualStyleBackColor = false;
            buttonminus.Click += button1_Click_1;
            // 
            // button2
            // 
            button2.BackColor = Color.SpringGreen;
            button2.Location = new Point(39, 237);
            button2.Name = "button2";
            button2.Size = new Size(117, 37);
            button2.TabIndex = 5;
            button2.Text = "*";
            button2.UseVisualStyleBackColor = false;
            button2.Click += button2_Click;
            // 
            // button3
            // 
            button3.BackColor = Color.SpringGreen;
            button3.Location = new Point(185, 237);
            button3.Name = "button3";
            button3.Size = new Size(117, 37);
            button3.TabIndex = 6;
            button3.Text = "/";
            button3.UseVisualStyleBackColor = false;
            button3.Click += button3_Click;
            // 
            // textbox3
            // 
            textbox3.Font = new Font("Segoe UI", 20.25F, FontStyle.Bold, GraphicsUnit.Point, 0);
            textbox3.Location = new Point(39, 132);
            textbox3.Multiline = true;
            textbox3.Name = "textbox3";
            textbox3.Size = new Size(263, 44);
            textbox3.TabIndex = 7;
            textbox3.TextAlign = HorizontalAlignment.Center;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(185, 47);
            label2.Name = "label2";
            label2.Size = new Size(93, 15);
            label2.TabIndex = 8;
            label2.Text = "Second Number";
            label2.Click += label2_Click;
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(39, 114);
            label3.Name = "label3";
            label3.Size = new Size(39, 15);
            label3.TabIndex = 9;
            label3.Text = "Result";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.ControlLightLight;
            ClientSize = new Size(354, 324);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(textbox3);
            Controls.Add(button3);
            Controls.Add(button2);
            Controls.Add(buttonminus);
            Controls.Add(textinput2);
            Controls.Add(label1);
            Controls.Add(textinput);
            Controls.Add(btnClick);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button btnClick;
        private TextBox textinput;
        private Label label1;
        private TextBox textinput2;
        private Button buttonminus;
        private Button button2;
        private Button button3;
        private TextBox textbox3;
        private Label label2;
        private Label label3;
    }
}
