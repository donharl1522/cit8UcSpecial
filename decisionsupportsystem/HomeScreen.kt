package com.example.decisionsupportsystem

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageView
import com.google.android.material.floatingactionbutton.FloatingActionButton

class HomeScreen : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.home_screen)

        val profile = findViewById<ImageView>(R.id.right_icon)
        val addCrop = findViewById<FloatingActionButton>(R.id.fab)

        profile.setOnClickListener {
            val intent = Intent(this, LoginActivity::class.java)
            startActivity(intent)
        }

        addCrop.setOnClickListener {
            val intent = Intent(this, CropInput::class.java)
            startActivity(intent)
        }
    }

}